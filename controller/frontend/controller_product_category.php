<?php 
	class product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//----------
			$id= isset($_GET["id"])?$_GET["id"]:0;
			//phan trang
			//quy trinh so ban ghi tren mot trang
			$record_per_page = 8;
			//tinh tong so ban ghi
			$total_record = $this->model->num_rows("select pk_product_id from tbl_product where fk_category_product_id=$id");
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			//tai trang p, xac dinh xem lay tu ban ghi nao
			$from = $p * $record_per_page;
			
			//----------
			//load view
			include "view/frontend/view_product_category.php";
		}
	}
	new product();
 ?>