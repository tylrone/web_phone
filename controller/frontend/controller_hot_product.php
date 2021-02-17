<?php 
	class controller_hot_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//loadview
			include "view/frontend/view_hot_product.php";
		}
	}
	new controller_hot_product();
 ?>