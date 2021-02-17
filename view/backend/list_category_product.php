<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Category product</div>
		<div class="panel-body">
			<a href="admin.php?controller=add_edit_category_product&act=add" class="btn btn-primary" style="margin-bottom: 5px;">Add</a>
			<?php if(isset($_GET["err"])&&$_GET["err"]=="name_exists"): ?>
				<div class="alert alert-danger">Tên danh mục đã tồn tại</div>
			<?php endif; ?>
			<table class="table table-bordered table-hover">
				<tr>
					<th>Tên danh mục</th>
					<th style="width:100px;">Quản lý</th>
				</tr>
				 <?php foreach($arr as $rows): ?> 
				<tr>
					<td><?php echo $rows->c_name; ?></td>
					<td style="text-align:center">
						<a href="admin.php?controller=add_edit_category_product&act=edit&id=<?php echo $rows->pk_category_product_id; ?>">Edit</a>&nbsp;|&nbsp;
						<a href="admin.php?controller=add_edit_category_product&act=delete&id=<?php echo $rows->pk_category_product_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				<?php endforeach; ?> 
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin: 0px;}
			</style>
			<ul class="pagination pull-right">
				<li class="disable"><a href="#">Trang</a></li>
				<?php for($i = 1; $i<= $num_page; $i++): ?>
				<li><a href="admin.php?controller=category_product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
