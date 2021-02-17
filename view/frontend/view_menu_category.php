<div class="category-product">
	<ul>	
		<div class="fa fa-list" style="padding: 10px 5px 10px 5px;color: #36ae8f;"> DANH MỤC SẢN PHẨM</div>
		<?php 
			//lấy các bản ghi trong table tbl_category_product
			$category = $this->model->get_all("select * from tbl_category_product order by pk_category_product_id desc");
			foreach($category as $rows):
 		?>
		<li>
			<a href="product/category/<?php echo $rows->pk_category_product_id; ?>/<?php echo remove_unicode($rows->c_name); ?>" class="<?php echo $rows->c_icon; ?>"> <?php echo $rows->c_name; ?></a>
		</li>
		<?php endforeach; ?>
	</ul>
</div>