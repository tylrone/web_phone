<?php 
	class controller_add_edit_user{
		public $model;
		public function __construct(){
			$this->model = new model();
			//======
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'add':
					//tao bien $form_action de chi duong dan cua thuoc tinh action trong form
				$form_action = "admin.php?controller=add_edit_user&act=do_add";
					//load view
					include "view/backend/add_edit_user.php";
				break;
				case 'do_add':
					$c_fullname = $_POST["c_fullname"];
					$c_email = $_POST["c_email"];
					$c_password = $_POST["c_password"];
					//mã hóa password
					$c_password = md5($c_password);
					//kiem tra xem email da ton tai chua, neu chua thi moi insert
					$check = $this->model->num_rows("select pk_user_id from tbl_user where c_email='$c_email'");
					if($check == 0){
						//insert ban ghi
						$this->model->execute("insert into tbl_user set c_fullname='$c_fullname', c_email='$c_email', c_password = '$c_password'");
						header("location:admin.php?controller=user");
					}
					else
						header("location:admin.php?controller=user&err=email_exists");
				break;
				case 'edit':
					$form_action = "admin.php?controller=add_edit_user&act=do_edit&id=$id";
					//lay mot ban ghi
					$arr = $this->model->get_a_record("select * from tbl_user where pk_user_id=$id");
					//loadview
					include "view/backend/add_edit_user.php";
				break;
				case 'do_edit':
					$c_fullname = $_POST["c_fullname"];
					$c_email = $_POST["c_email"];
					$c_password = $_POST["c_password"];
					//update ban ghi
					$this->model->execute("update  tbl_user set c_fullname='$c_fullname', c_email='$c_email', c_password = '$c_password' where pk_user_id=$id");
					// neu c_password k ban rong thi update password 
					if($c_password != ""){
						$c_password = md5($c_password);
						$this->model->execute("update tbl_user set c_password='$c_password' where pk_user_id=$id");
					}
					header("location:admin.php?controller=user");
				break;
				case 'delete':
					$this->model->execute("delete from tbl_user where pk_user_id=$id");
					header("location:admin.php?controller=user");
				break;
			//======
			}
		}
	}
	new controller_add_edit_user();
 ?>