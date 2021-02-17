<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit product</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action; ?>" enctype= "multipart/form-data">
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Tên sản phẩm</div>
				<div class="col-md-9">
					<input type="text" name="c_name" class="form-control" value="<?php echo isset($record->c_name)?$record->c_name:''; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Thuộc danh mục</div>
				<div class="col-md-9">
					<select name="fk_category_product_id">
						<?php $category = $this->model->get_all("select * from tbl_category_product order by pk_category_product_id desc");
						foreach($category as $rows): ?>
						<option <?php if(isset($record->fk_category_product_id)&&$record->fk_category_product_id==$rows->pk_category_product_id): ?> selected <?php endif; ?> value="<?php echo $rows->pk_category_product_id; ?>"><?php echo $rows->c_name; ?></option>
						<?php endforeach; ?>					
					</select>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Giá</div>
				<div class="col-md-9">
					<input type="text" name="c_price" class="form-control" value="<?php echo isset($record->c_price)?$record->c_price:''; ?>">
					
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Mô tả</div>
				<div class="col-md-9">
					<textarea name="c_description" class="form-control" style="height:250px;">
					<?php echo isset($record->c_description)?$record->c_description:''; ?>						
					</textarea>
					<script type="text/javascript">CKEDITOR.replace("c_description");</script>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Ảnh</div>
				<div class="col-md-9">
					<input type="file" name="c_img">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="checkbox" <?php if(isset($record->c_hotproduct)&&$record->c_hotproduct==1): ?> checked <?php endif; ?> name="c_hotproduct" id="c_hotproduct"> <label for="c_hotproduct">Sản phẩm nổi bật</label>
				</div>
			</div>
			<!-- end row -->	
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="checkbox" <?php if(isset($record->c_saleproduct)&&$record->c_saleproduct==1): ?> checked <?php endif; ?> name="c_saleproduct" id="c_saleproduct"> <label for="c_saleproduct">Sản phẩm giảm giá</label>
				</div>
			</div>
			<!-- end row -->			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="submit" class="btn btn-primary" value="Process">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>