<div class="col-md-12 ">
	<div style="margin-bottom:5px;">
		<a href="admin.php?controller=add_edit_product&act=add" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">product</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th style="width:50px;">STT</th>
					<th style="width:100px;">Ảnh</th>
					<th style="width: 300px;">Tên sản phẩm</th>		
					<th style="width:150px;">Thuộc danh mục</th>
					<th style="width: 300px;">Mô tả</th>
					<th>Giá</th>
					<th style="width: 70px;">Hot</th>
					<th style="width: 70px;">Sale</th>
					<th style="width:100px;"></th>
				</tr>
				<?php $stt = isset($_GET["p"]) ? ($_GET["p"]-1)*$record_per_page : 0; ?>
				<?php foreach($arr as $rows): ?>
				<?php $stt++; ?>
				<tr>
					<td style="text-align:center;"><?php echo $stt; ?></td>
					<td style="text-align:center;">
						<?php if($rows->c_img !="" && file_exists("public/upload/product/".$rows->c_img)): ?>
						<img src="public/upload/product/<?php echo $rows->c_img; ?>" style="width: 100px;">
					<?php endif; ?>
					</td>
					<td><?php echo $rows->c_name; ?></td>
					<td style="text-align:center;">
						<?php 
							$category = $this->model->get_a_record("select c_name from tbl_category_product where pk_category_product_id=".$rows->fk_category_product_id);
							echo isset($category->c_name)?$category->c_name:'';
						 ?>
					</td>
					<td><?php echo substr($rows->c_description,0,200); ?></td>
					<td style="text-align:center;"><?php echo $rows->c_price; ?></td>
					<td style="text-align: center;">
						<?php if($rows->c_hotproduct ==1): ?>
							<span class="glyphicon glyphicon-check"></span>
						<?php endif; ?>
					</td>
					<td style="text-align: center;">
						<?php if($rows->c_saleproduct ==1): ?>
							<span class="glyphicon glyphicon-check"></span>
						<?php endif; ?>
					</td>
					<td style="text-align:center;">
						<a href="admin.php?controller=add_edit_product&act=edit&id=<?php echo $rows->pk_product_id; ?>">Edit</a>&nbsp;
						<a href="admin.php?controller=add_edit_product&act=delete&id=<?php echo $rows->pk_product_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}			
			</style>
			<ul class="pagination pull-right">
				<li class="disable"><a href="#">Trang</a></li>
				<?php for($i = 1; $i<= $num_page; $i++): ?>
				<li><a href="admin.php?controller=product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>