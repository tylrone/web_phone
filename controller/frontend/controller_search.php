<?php 
	class controller_search{
		public function __construct(){
			//-----
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 6;
			//tinh tong so ban ghi
			$total_record = model::num_rows("select pk_product_id from tbl_product where c_name like '%$key%'");
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url (bien nay se chi trang hien tai)
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao
			$from = $p*$record_per_page;
			//sql
			$data = model::get_all("select * from tbl_product where c_name like '%$key%' order by pk_product_id desc limit $from,$record_per_page");
			//load view
			include "view/frontend/view_search.php";
			//-----
		}
	}
	new controller_search();
 ?>