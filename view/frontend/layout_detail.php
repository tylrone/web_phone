<!DOCTYPE html>
<html>
<head>
	<title>Trang Chi Tiết</title>
	<meta charset="utf-8">
	<base href="http://tylrone.byethost10.com/">
	<link href="public/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="public/frontend/style2.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script language="javascript" src="public/frontend/js/jquery-3.3.1.min.js"></script>
	<script language="javascript" src="public/frontend/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/frontend/js/jquery.sticky-kit.js"></script>


 
</head>
<body>
<div class="wrap">
	 <?php include "view/frontend/inc_menu.php"; ?> 
	<div class="main-left">
		<?php include "controller/frontend/controller_menu_category.php"; ?>
		<div class="support-online">
			<table>
				<tr> 
					<th colspan="2;">HỖ TRỢ TRỰC TUYẾN</th>
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
			<b style="line-height: 30px;font-size: 16px;">CHÚNG TÔI TRÊN FACEBOOK
			</b>
			<div style="width: 245px;border-bottom: 2px solid black;"></div><br>
			<a href="#"><img src="public/frontend/images/we-on-fb1.jpg"></a>
			<a href="#"><img src="public/frontend/images/we-on-fb2.jpg"></a>
		</div>
	</div>
	<div class="main-right">
		<?php 
        	if(file_exists($file_controller))
        		include $file_controller;
         ?>
	</div>
	<div style="clear: both;"></div>
	<?php include "view/frontend/footer_menu.php"; ?>
</div>	
</body>
</html>