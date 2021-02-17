<?php 
	class controller_order{
		public function __construct(){
			//--------------------
			if($_SESSION["customer_email"]!=null){
			$customer_id = $_SESSION["customer_id"];
			
			//--------------------
			//tính tổng số bản ghi
			$total = model::num_rows("select * from tbl_order inner join tbl_customer on tbl_order.customer_id = tbl_customer.customer_id and tbl_order.customer_id=$customer_id");
			//quy định số bản ghi trên 1 trang
			$record_per_page = 5;
			//Tính số trang = ceil(tổng số bản ghi/số bản ghi trên 1 trang)
			$num_page = ceil($total/$record_per_page);
			//Lấy biến p truyền trên url (là biến chỉ số trang hiện tại)
			$page = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//tính bản ghi bắt đầu hiển thị ở trang đó (ở trang nào, sẽ từ bản ghi nào đến bản ghi nào)
			$from = $page * $record_per_page;
			$arr = model::get_all("select hoten,gia,trangthai,order_id,ngaymua from tbl_order,tbl_customer where tbl_order.customer_id=tbl_customer.customer_id and tbl_order.customer_id=$customer_id order by trangthai,order_id desc limit $from,$record_per_page");
			//load view
			include "view/frontend/view_order.php";
			//--------------------
			}
			
		}
	}
	new controller_order();
 ?>