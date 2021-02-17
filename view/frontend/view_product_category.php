<div class="smart-phone" style="margin-left: 30px;">
		<table cellspacing="30px;">					
			<tr>
				<?php //thuc hien truy van sql
					$arr = $this->model->get_all("select * from tbl_product where fk_category_product_id=$id order by pk_product_id desc limit 0,4");
					foreach($arr as $rows): ?>
				<td>
					<a href="product/detail/<?php echo $rows->pk_product_id; ?>/<?php echo remove_unicode($rows->c_name); ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>"><p><?php echo $rows->c_name; ?></p></a>
					<p><?php echo substr($rows->c_description,0,100); ?></p>
					<p style="color: #fca022;"><?php echo number_format($rows->c_price); ?>đ</p>
				</td>
				<td style="border:none;"></td>
				<?php endforeach; ?>
			</tr>
			<tr style="height: 50px;"></tr>
			<tr>
				<?php
					$arr = $this->model->get_all("select * from tbl_product where fk_category_product_id=$id order by pk_product_id desc limit 4,4");
					foreach($arr as $rows): ?>
				<td>
					<a href="product/detail/<?php echo $rows->pk_product_id; ?>/<?php echo remove_unicode($rows->c_name); ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>"><p><?php echo $rows->c_name; ?></p></a>
					<p><?php echo substr($rows->c_description,0,100); ?></p>
					<p style="color: #fca022;"><?php echo number_format($rows->c_price); ?>đ</p>
				</td>
				<td style="border:none;"></td>
				<?php endforeach; ?>	
			</tr>
		</table>
</div>
