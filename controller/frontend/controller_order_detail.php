<?php 
	class controller_order_detail{
		public function __construct(){
			//--------------------
			$order_id= isset($_GET["order_id"])?$_GET["order_id"]:0;
			$act= isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "cancel":
					model::execute("delete from tbl_order where order_id=$order_id");
					model::execute("delete from tbl_order_detail where order_id=$order_id");
					echo "<script>location.href='';</script>";
				break;
			}
			//--------------------
			//tính tổng số bản ghi
			$total = model::num_rows("select * from tbl_order_detail where order_id=$order_id");
			//quy định số bản ghi trên 1 trang
			$record_per_page = 10;
			//Tính số trang = ceil(tổng số bản ghi/số bản ghi trên 1 trang)
			$num_page = ceil($total/$record_per_page);
			//Lấy biến p truyền trên url (là biến chỉ số trang hiện tại)
			$page = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//tính bản ghi bắt đầu hiển thị ở trang đó (ở trang nào, sẽ từ bản ghi nào đến bản ghi nào)
			$from = $page * $record_per_page;
			$arr = model::get_all("select * from tbl_order_detail where order_id=$order_id limit $from,$record_per_page");
			//load view
			include "view/frontend/view_order_detail.php";
			//--------------------
		}
	}
	new controller_order_detail();
 ?>