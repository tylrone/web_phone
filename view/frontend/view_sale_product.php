<div class="sale-product">
	<table cellspacing="40px;">
		<tr>
			<?php $product = $this->model->get_all("select * from tbl_product where c_saleproduct=1 limit 0,4");
				foreach($product as $rows): ?>
			<td>
				<a href="product/detail/<?php echo $rows->pk_product_id; ?>/<?php echo remove_unicode($rows->c_name); ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>"><p><?php echo $rows->c_name; ?></p></a>
				<p style="color: #fca022;"><?php echo number_format($rows->c_price); ?>đ</p>
				<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" style="line-height: 22px;width: 150px;padding: 5px;background: #fca022;color: white;font-size: 17px;border: 1px solid grey;border-radius: 5px;cursor: pointer;">Thêm vào giỏ</a>
			</td>
			<?php endforeach; ?>
		</tr>
		<tr>
			<?php $product = $this->model->get_all("select * from tbl_product where c_saleproduct=1 limit 4,4");
				foreach($product as $rows): ?>
			<td>
				<a href="product/detail/<?php echo $rows->pk_product_id; ?>/<?php echo remove_unicode($rows->c_name); ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>"><p><?php echo $rows->c_name; ?></p></a>
				<p style="color: #fca022;"><?php echo number_format($rows->c_price); ?>đ</p>
				<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" style="line-height: 22px;width: 150px;padding: 5px;background: #fca022;color: white;font-size: 17px;border: 1px solid grey;border-radius: 5px;cursor: pointer;">Thêm vào giỏ</a>
			</td>
			<?php endforeach; ?>
		</tr>
	</table>
</div>