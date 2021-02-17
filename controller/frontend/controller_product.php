<?php 
	class controller_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//loadview
			include "view/frontend/view_product.php";
		}
	}
	new controller_product();
 ?>