<div class="col-md-10 col-xs-offset-1">	
	<div class="panel panel-primary">
		<div class="panel-heading">Quản lý đơn hàng</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr style="background-color: black; color:white">
					<th>Tên khách hàng</th>
					<th>Ngày mua</th>
					<th>Đơn giá</th>
					<th style="width: 150px;">Trạng thái</th>
					<th style="width: 200px">Quản lý</th>
				</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
				<tr>
					<td><?php echo $rows->hoten; ?></td>
					<td style="text-align: center;">
					<?php 
						$ngaymua = date_create($rows->ngaymua);
						echo date_format($ngaymua,"d/m/Y"); 
					?></td>
					<td style="text-align: center;"><?php echo $rows->gia; ?></td>
					<td style="text-align: center;">
						<?php echo $rows->trangthai==1?"Đã giao hàng":"<span style='color:red;'>Chưa giao hàng</span>" ?>
					</td>
					<td style="text-align: center;">
					<a href="order_detail/<?php echo $rows->order_id; ?>">Chi tiết</a>
					&nbsp;&nbsp;
						
					</td>
				</tr>
				<?php } ?>
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin:0px;}
			</style>
			<ul class="pagination" style="margin-left: 85%;">
		        <li class="page-item active"><a href="#" class="page-link">Trang</a></li>
		        <?php for($i = 1; $i <= $num_page; $i++): ?>
		        <li class="page-item"><a href="order/<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
		        <?php endfor; ?>
		     </ul>
		</div>
	</div>
</div>