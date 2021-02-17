<?php 
	class controller_new_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//loadview
			include "view/frontend/view_new_product.php";
		}
	}
	new controller_new_product();
 ?>