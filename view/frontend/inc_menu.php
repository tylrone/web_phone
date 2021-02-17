<div class="top_header">
		<div class="top_contact"><i class="fa fa-phone" >&nbsp;0902.068.068</i>&nbsp;<i class="fa fa-envelope-square">&nbsp;urbanstore@gmail.com</i></div>
		<nav class="top_menu">
			<ul>
				<li><a href="order.html">Hóa Đơn</a></li>
				<li><a href="#">Khuyến Mãi</a></li>
				<li><a href="#">Dịch Vụ</a></li>
				<li><?php 
		  	//kiem tra, neu user da dang nhap thi hien thi thong tin user
		  	if(isset($_SESSION["customer_email"]))
		  	{
		   ?>
		   Xin chào <?php echo $_SESSION["customer_email"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?controller=login&act=logout">Logout</a>
		   <?php }else{ ?>
		  <a href="login.html"><i class="fa fa-user"></i> Đăng nhập</a> <a href="register.html"><i class="fa fa-user-plus"></i> Đăng ký</a> 
			<?php } ?></li>
				
			</ul>
		</nav>
	</div>
	<div class="header">
		<img src="public/frontend/images/footer-logo.jpg" style="width: 250px;margin-left: 60px;margin-top: 10px;">
		<!-- <div id="collection_selector">
			<div id="search_text">Danh Mục</div>
			<div id="list_item">
				<ul style="background-color: white;">
					<li><a href="#">Sản phẩm khuyến mãi</a></li>
					<li><a href="#">Điện thoại</a></li>
					<li><a href="#">Máy tính - Laptop</a></li>
					<li><a href="#">Nội thất</a></li>
					<li><a href="#">Thời trang</a></li>
				</ul>
			</div>
		</div> -->
		<script type="text/javascript">
			  function search(){
				key = document.getElementById("key").value;
				location.href="search/"+key;
				return false;
			  }
			</script>
		<form method="post">
			<input type="text" placeholder="Bạn muốn tìm gì..." class="search_box" id="key" >
			<input type="submit" class="search_button" value="Tìm Kiếm" onclick="return search();">
		</form>
		
		<div class="basket"><a href="cart.html"><i class="fa fa-shopping-cart"></i>&nbsp;<?php echo isset($_SESSION["cart"])?count($_SESSION["cart"]):""; ?></a></div>
	</div>
	<div class="main">
		<div class="main_menu">
			<nav>
			<ul>
				<li><a href="http://tylrone.byethost10.com/">TRANG CHỦ</a></li>
				<li><a href="all_product.html">TẤT CẢ SẢN PHẨM</a></li>
				<li><a href="#">SẢN PHẨM MỚI</a></li>
				<li><a href="#">BÁN CHẠY NHẤT</a></li>
				<li><a href="news.html">TIN TỨC</a></li>
				<li><a href="#">VỀ CHÚNG TÔI</a></li>
				<li><a href="#">LIÊN HỆ VỚI CHÚNG TÔI</a></li>
			</ul>
		</nav>
		</div>