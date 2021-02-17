<?php 
  $id = isset($_GET["id"])?$_GET["id"]:0;
  $product = $this->model->get_a_record("select * from tbl_product where pk_product_id=$id");
 ?>
 <div style="border: 1px solid black;margin: 5px;">
 	<table>
 		<tr>
 			<td>
 				<img src="public/upload/product/<?php echo $product->c_img; ?>" style="width: 300px;">
 			</td>
 			<td>
 				<b style="font-size: 50px;"><?php echo $product->c_name; ?></b>
 				<p style="color: red;font-size: 50px;">Giá : <?php echo number_format($product->c_price); ?> VND</p>
 				<a href="index.php?controller=cart&act=add&id=<?php echo $product->pk_product_id; ?>" style="line-height: 22px;width: 150px;padding: 10px;background: #fca022;color: white;font-size: 17px;border: 1px solid grey;border-radius: 5px;cursor: pointer;">Thêm vào giỏ</a>
 			</td>
 		</tr>
 	</table>
 </div>
 <div style="margin: 5px;"><?php echo $product->c_description; ?></div>
 