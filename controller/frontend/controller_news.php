<?php 
	class news{
		public function __construct(){
			$id = isset($_GET["id"])? $_GET["id"]:0;
			//-----
			//phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 4;
			//tinh tong so ban ghi
			$total_record = model::num_rows("select pk_news_id from tbl_news");
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url (bien nay se chi trang hien tai)
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao
			$from = $p*$record_per_page;
			//sql
			$data = model::get_all("select * from tbl_news order by pk_news_id desc limit $from,$record_per_page");
			//load view
			include "view/frontend/view_news.php";
			//-----
		}
	}
	new news();
 ?>