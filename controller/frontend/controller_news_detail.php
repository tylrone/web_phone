<?php 
	class controller_news_detail{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/news_detail.php";
		}
	}
	new controller_news_detail();
 ?>