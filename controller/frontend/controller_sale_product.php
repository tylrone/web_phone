<?php 
	class controller_sale_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//loadview
			include "view/frontend/view_sale_product.php";
		}
	}
	new controller_sale_product();
 ?>