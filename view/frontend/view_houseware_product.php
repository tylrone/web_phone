<div class="office-machine" style="margin-top: 20px;">
				<b style="color: #36ae8f;margin-left: 10px;">ĐỒ GIA DỤNG</b>
				<a href="product/category/12/gia-dung" style="margin-left: 730px;color: #9bc07d;">Xem thêm >></a>
				<table cellspacing="30px;" style="border-top: 1px solid #dddddd;">
					<tr>
						<?php $product = model::get_all("select * from tbl_product where fk_category_product_id=12 limit 0,4");
						foreach($product as $rows): ?>
						<td>
							<a href="product/detail/<?php echo $rows->pk_product_id; ?>/<?php echo remove_unicode($rows->c_name); ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>">
								<p><?php echo $rows->c_name; ?></p>
							</a>
							<p style="color: #fca022;"><?php echo number_format($rows->c_price); ?>đ</p>
							<a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" style="line-height: 22px;width: 150px;padding: 5px;background: #fca022;color: white;font-size: 17px;border: 1px solid grey;border-radius: 5px;cursor: pointer;">Thêm vào giỏ</a>
						</td>
						<?php endforeach; ?>
					</tr>
				</table>
			</div>