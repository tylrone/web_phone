<?php 
	class controller_logout{
		public function __construct(){
			//dang xuat bang cach huy bien session
			unset($_SESSION["c_email"]);
			//quay tro lai trang admin.php
			header("location:admin.php");
		}
	}
	new controller_logout();
 ?>