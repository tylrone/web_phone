<div class="smart-phone" style="margin-left: 30px;">
	<table cellspacing="30px;">	
		<?php $i=0; ?>

		<?php for($stt=1;$stt <= $record_per_page;$stt++): ?>
			<tr>
				<?php $product = model::get_all("select * from tbl_product limit $i,4");
				foreach($product as $rows): ?>
				<td>
					<a href="product/detail/<?php echo $rows->pk_product_id; ?>/<?php echo remove_unicode($rows->c_name); ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>"><p><?php echo $rows->c_name; ?></p></a>
					<p style="color: #fca022;"><?php echo number_format($rows->c_price); ?>đ</p>
					<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" style="line-height: 22px;width: 150px;padding: 5px;background: #fca022;color: white;font-size: 17px;border: 1px solid grey;border-radius: 5px;cursor: pointer;">Thêm vào giỏ</a>
				</td>
				<td style="border:none;"></td>
				<?php endforeach; ?>
			</tr>
			<tr style="height: 50px;"></tr>
		<?php $i= $i+4; ?>
		<?php endfor; ?>
		</table>
		
</div>
