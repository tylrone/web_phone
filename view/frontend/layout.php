<!DOCTYPE html>
<html>
<head>
	<title>Urban Store</title>
	<meta charset="utf-8">
	<!-- <base href="http://tylrone.byethost10.com/"> -->
	<link rel="stylesheet" type="text/css" href="public/frontend/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script language="javascript" src="public/frontend/js/jquery-3.3.1.min.js"></script>
	<script language="javascript" src="public/frontend/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/frontend/js/jquery.sticky-kit.js"></script>
</head>
<body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#search_text").click(function(){
			$("#list_item").toggle();
		});
		var slide = new Array();
		slide[0] = "public/frontend/images/slide2.png";
		slide[1] = "public/frontend/images/slide3.png";
		slide[2] = "public/frontend/images/slide1.png";
		var n = 0;
		//gọi hàm setInterval để sau 4 giây đổi ảnh
		setInterval(function(){
			//ẩn ảnh hiện tại
			$("#slide-image").fadeOut(function(){
				$("#slide-image").attr("src",slide[n]);
				$("#slide-image").fadeIn(4000);
				n++;
				if(n==slide.length)
					n=0;
			});
		},4000);
		$(".select1").click(function(){
			$(".select1").attr("style","color:#36ae8f;");
			$(".select2").removeAttr("style");
			$(".select3").removeAttr("style");
			$(".sale-product").attr("style","display:block;");
			$(".new-product").attr("style","display:none;");
		});
		$(".select2").click(function(){
			$(".select2").attr("style","color:#36ae8f;");
			$(".select1").removeAttr("style");
			$(".select3").removeAttr("style");
			$(".sale-product").attr("style","display:none;");
			$(".new-product").attr("style","display:block;");

		});
		$(".select3").click(function(){
			$(".select3").attr("style","color:#36ae8f;");
			$(".select1").removeAttr("style");
			$(".select2").removeAttr("style");
			$(".sale-product").attr("style","display:none;");
			$(".new-product").attr("style","display:none;");
		});
		$("#select-phone").click(function(){
			$("#select-phone").attr("style","color:#36ae8f;border-bottom:none;");
			$("#select-pc").removeAttr("style");
			$("#select-jewelry").removeAttr("style");
			$("#select-watch").removeAttr("style");
			$("#select-fashion").removeAttr("style");
			$(".smart-phone").attr("style","display:block;")
			$(".pc-laptop").attr("style","display:none;")
			$(".jewelry").attr("style","display:none;")
			$(".watch").attr("style","display:none;")
			$(".fashion").attr("style","display:none;")
		});
		$("#select-pc").click(function(){
			$("#select-pc").attr("style","color:#36ae8f;border-bottom:none;");
			$("#select-phone").removeAttr("style");
			$("#select-jewelry").removeAttr("style");
			$("#select-watch").removeAttr("style");
			$("#select-fashion").removeAttr("style");
			$(".pc-laptop").attr("style","display:block;")
			$(".smart-phone").attr("style","display:none;")
			$(".jewelry").attr("style","display:none;")
			$(".watch").attr("style","display:none;")
			$(".fashion").attr("style","display:none;")
			
		});
		$("#select-jewelry").click(function(){
			$("#select-jewelry").attr("style","color:#36ae8f;border-bottom:none;");
			$("#select-phone").removeAttr("style");
			$("#select-pc").removeAttr("style");
			$("#select-watch").removeAttr("style");
			$("#select-fashion").removeAttr("style");
			$(".jewelry").attr("style","display:block;")
			$(".pc-laptop").attr("style","display:none;")
			$(".watch").attr("style","display:none;")
			$(".fashion").attr("style","display:none;")
			$(".smart-phone").attr("style","display:none;")
			
		});
		$("#select-watch").click(function(){
			$("#select-watch").attr("style","color:#36ae8f;border-bottom:none;");
			$("#select-phone").removeAttr("style");
			$("#select-pc").removeAttr("style");
			$("#select-jewelry").removeAttr("style");
			$("#select-fashion").removeAttr("style");
			$(".watch").attr("style","display:block;")
			$(".pc-laptop").attr("style","display:none;")
			$(".jewelry").attr("style","display:none;")
			$(".fashion").attr("style","display:none;")
			$(".smart-phone").attr("style","display:none;")
			
		});
		$("#select-fashion").click(function(){
			$("#select-fashion").attr("style","color:#36ae8f;border-bottom:none;");
			$("#select-phone").removeAttr("style");
			$("#select-pc").removeAttr("style");
			$("#select-watch").removeAttr("style");
			$("#select-jewelry").removeAttr("style");
			$(".fashion").attr("style","display:block;")
			$(".pc-laptop").attr("style","display:none;")
			$(".watch").attr("style","display:none;")
			$(".jewelry").attr("style","display:none;")
			$(".smart-phone").attr("style","display:none;")
			
		});
	});
</script>
<div class="wrap">
	 <?php include "view/frontend/inc_menu.php"; ?> 
		<div class="slide">
			<img src="public/frontend/images/slide1.png" id="slide-image">
		</div>
		<div><img src="public/frontend/images/mid-main.jpg"></div>
		<div class="main-left">
			<?php include "controller/frontend/controller_menu_category.php"; ?>
			<div class="support-online">
				<table>
					<tr> 
						<th colspan="2;" style="color: #36ae8f;">HỖ TRỢ TRỰC TUYẾN</th>
					</tr>
					<tr>
						<td style=""><a href="#"><img src="public/frontend/images/avt1.png"></a></td>
						<td>
							<p>Nguyễn Thu Trang</p>
							<p style="color: #b1e9ff;">0981245215 <br>
								nguyentrang@gmail.com
							</p>
						</td>
					</tr>
					<tr>
						<td style=""><a href="#"><img src="public/frontend/images/avt2.png"></a></td>
						<td>
							<p>Nguyễn Thị Nhẫn</p>
							<p style="color: #b1e9ff;">0915345846 <br>
								nguyennhan@gmail.com
							</p>
						</td>
					</tr>
				</table>
			</div>
			
			<?php include "controller/frontend/controller_hot_product.php"; ?>
			<div class="we-on-fb">
				<b style="line-height: 30px;font-size: 16px;color: #36ae8f;">CHÚNG TÔI TRÊN FACEBOOK
				</b>
				<div style="width: 245px;border-bottom: 2px solid black;"></div><br>
				<a href="#"><img src="public/frontend/images/we-on-fb1.jpg"></a>
				<a href="#"><img src="public/frontend/images/we-on-fb2.jpg"></a>
			</div>
		</div>
		<div class="main-right">
			<b style="color: #36ae8f;">SẢN PHẨM HOT</b>
			<div class="hot-menu">
				<ul>
					<li class="select1" style="color:#36ae8f;">Giảm Giá</li>
					<li>|</li>
					<li class="select2">Sản Phẩm Mới</li>

					
				</ul>
			</div>
			<?php include "controller/frontend/controller_sale_product.php"; ?>
			<?php include "controller/frontend/controller_new_product.php"; ?>
			<div class="watch-sale">
				<a href="#"><img src="public/frontend/images/watch-sale.jpg"></a> 
				<a href="#"><img src="public/frontend/images/watch-sale1.jpg"></a>
			</div>
			<div class="like-product">
				<b style="color: #36ae8f;">SẢN PHẨM YÊU THÍCH</b>
				<div class="like-menu">
					<ul>
						<li class="fa fa-mobile-phone" id="select-phone" style="color:#36ae8f;"></li>
						<li class="fa fa-desktop" id="select-pc"></li>
						<li class="fa fa-diamond" id="select-jewelry"></li>
						<li class="fa fa-clock-o" id="select-watch"></li>
						<li class="fa fa-shopping-bag" id="select-fashion"></li>
					</ul>
				</div>
				<?php include "controller/frontend/controller_product.php"; ?>
			</div>
			<div class="how-to-buy">
				<b style="color: #36ae8f;margin-left: 10px;">CÁCH THỨC MUA HÀNG</b>
				<div><img src="public/frontend/images/how-to-buy.jpg"></div>
			</div>
			<?php include "view/frontend/view_office_product.php" ?>
			<?php include "view/frontend/view_houseware_product.php" ?>
			<div style="margin-top: 20px;width: ">
				<b style="color: #36ae8f;margin-left: 10px;">ĐỐI TÁC</b>
				<div><img src="public/frontend/images/partner.jpg" style="width: 925px;"></div>
			</div>
		</div>
	</div>
	<?php include "view/frontend/footer_menu.php"; ?>
	
</div>
</body>
</html>