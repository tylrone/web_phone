<?php 
	class controller_register{
		public function __construct(){
			//----------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$hoten = $_POST["hoten"];
				$email = $_POST["email"];
				$diachi = $_POST["diachi"];
				$dienthoai = $_POST["dienthoai"];
				$password = $_POST["password"];
				$password = md5($password);
				//insert thong tin vao csdl
				model::execute("insert into tbl_customer(hoten,email,diachi,dienthoai,password) values('$hoten','$email','$diachi','$dienthoai','$password')");
				//header("location:index.php?controller=register&act=success");
				echo "<script language='javascript'>location.href='register/success';</script>";
			}
			//----------
			//load view
			include "view/frontend/view_register.php";
		}
	}
	new controller_register();
 ?>