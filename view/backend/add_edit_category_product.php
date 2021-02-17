<div class="col-md-8 col-xs-offset-2">	
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit category product</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $form_action; ?>">
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Name</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->c_name)?$record->c_name:''; ?>" name="c_name" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" value="Process" class="btn btn-primary">
				</div>
			</div>
			<!-- end rows -->
		</form>
		</div>
	</div>
</div>