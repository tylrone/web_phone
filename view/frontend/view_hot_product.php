<div class="hot-product">
	<table style="border-collapse: collapse; text-align: center;">
		<b style="margin-left: 25px;line-height: 30px;color: #36ae8f;">SẢN PHẨM BÁN CHẠY</b>
		<div style="width: 245px;border-bottom: 1px solid #dddddd;"></div>
		<?php 
            //lấy các sản phẩm nổi bật: c_hotproduct=1
            $product = $this->model->get_all("select * from tbl_product where c_hotproduct=1 order by pk_product_id desc limit 0,5");
            foreach($product as $rows):
             ?>
		<tr>
			<td colspan="2;"><img src="public/upload/product/<?php echo $rows->c_img; ?>"></td>
			<td>
				<a href="product/detail/<?php echo $rows->pk_product_id; ?>/<?php echo remove_unicode($rows->c_name); ?>"><b><?php echo $rows->c_name; ?></b></a>
				<p style="color: #fca022;"><?php echo number_format($rows->c_price); ?>đ</p>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>