<?php 
	class news{
		public $model;
		public function __construct(){
			$this->model = new model();
			//----------
			//phan trang
			//quy trinh so ban ghi tren mot trang
			$record_per_page = 4;
			//tinh tong so ban ghi
			$total_record = $this->model->num_rows("select pk_news_id from tbl_news");
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			//tai trang p, xac dinh xem lay tu ban ghi nao
			$from = $p * $record_per_page;
			//thuc hien truy van sql
			$arr = $this->model->get_all("select * from tbl_news order by pk_news_id desc limit $from,$record_per_page");
			//----------
			//load view
			include "view/backend/list_news.php";
		}
	}
	new news();
 ?>