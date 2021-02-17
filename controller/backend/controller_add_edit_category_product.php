<?php 
	class controller_add_edit_category_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			switch($act){
				case 'add':
						$form_action = "admin.php?controller=add_edit_category_product&act=do_add";
						include "view/backend/add_edit_category_product.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$check = $this->model->num_rows("select c_name from tbl_category_product where c_name='$c_name'");
					if($check == 0){
						//insert ban ghi
					$this->model->execute("insert into tbl_category_product set c_name='$c_name'");
					header("location:admin.php?controller=category_product");
					}
					else
					header("location:admin.php?controller=category_product&err=name_exists");
				break;
				case "edit":
					$form_action = "admin.php?controller=add_edit_category_product&act=do_edit&id=$id";
					//lay 1 ban ghi
					$record = $this->model->get_a_record("select c_name from tbl_category_product where pk_category_product_id=$id");
					//load view
					include "view/backend/add_edit_category_product.php";
				break;
				case 'do_edit':
					$c_name = $_POST["c_name"];
					$this->model->execute("update tbl_category_product set c_name='$c_name' where pk_category_product_id='$id'");
					header("location:admin.php?controller=category_product");
				break;
				case "delete":
				 $this->model->execute("delete from tbl_category_product where pk_category_product_id=$id");
				 header("location:admin.php?controller=category_product");
				break;
			}
		}
	}
	new controller_add_edit_category_product();
 ?>