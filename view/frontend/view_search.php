<div class="smart-phone">
	<h2 style="font-weight: bold; color:red;">Kết quả tìm kiếm</h2>
		<table cellspacing="30px;">					
			<tr>
				<?php foreach($data as $rows): ?>
				<td>
					<a href="product/detail/<?php echo $rows->pk_product_id; ?>/<?php echo remove_unicode($rows->c_name); ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>">
					<h4><?php echo $rows->c_name; ?></h4></a>
					<p style="color: #fca022;"><?php echo number_format($rows->c_price); ?>đ</p>
					 <a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" style="line-height: 22px;width: 150px;padding: 5px;background: #fca022;color: white;font-size: 17px;border: 1px solid grey;border-radius: 5px;cursor: pointer;">Thêm vào giỏ</a>
				</td>
				<?php endforeach; ?>
			</tr>
		</table>
</div>