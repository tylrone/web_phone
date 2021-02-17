<?php 
	class controller_login{
		public $model;
		public function __construct(){
			$this->model = new model();
			//----------
			//khi user an nut submit
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$c_email = $_POST["c_email"];
				$c_password = $_POST["c_password"];
				//ma hoa password bang ham md5
				$c_password = md5($c_password);
				//kiem tra email
				$check = $this->model->get_a_record("select c_email,c_password from tbl_user where c_email='$c_email'");
				if(isset($check->c_email)){
					//kiem tra password
					if($c_password == $check->c_password){
						//dang nha thanh cong
						$_SESSION["c_email"] = $c_email;
						//di chuyen den trang admin.php
						header("location:admin.php");
					}
				}
			}
			//----------
			//load view
			include "view/backend/view_login.php";
		}
	}
	new controller_login();
 ?>