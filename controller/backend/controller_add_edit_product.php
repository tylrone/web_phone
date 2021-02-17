<?php 
	class controller_add_edit_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_product&act=do_edit&id=$id";
					//lay 1 ban ghi
					$record = $this->model->get_a_record("select * from tbl_product where pk_product_id=$id");
					//load view
					include "view/backend/add_edit_product.php";
				break;
				//khi user an nut submit
				case 'do_edit':
					$c_name = $_POST["c_name"];
					$c_hotproduct = isset($_POST["c_hotproduct"])?1:0;
					$c_saleproduct = isset($_POST["c_saleproduct"])?1:0;
					$c_price= $_POST["c_price"];
					$c_description = $_POST["c_description"];
					$fk_category_product_id = $_POST["fk_category_product_id"];
					//update ban ghi tuong ung voi id truyen vao
					$this->model->execute("update tbl_product set c_name='$c_name',c_description='$c_description',c_price='$c_price',fk_category_product_id=$fk_category_product_id,c_hotproduct=$c_hotproduct,c_saleproduct=$c_saleproduct where pk_product_id=$id");
					//neu user upload anh: de lay thong tin cua file thi su dung doi tuong $_FILES["ten-formcontrol"]["name"] -> lay ten file
					//																	   $_FILES["ten-formcontrol"]["size"] -> lay kich thuoc file
					// 																	   $_FILES["ten-formcontrol"]["tmp_name"] -> lay duong dan cua file da duoc upload len thu muc tmp
					if($_FILES["c_img"]["name"] !=""){
						//=====
						//lay anh cu de xoa
						$old_img= $this->model->get_a_record("select c_img from tbl_product where pk_product_id=$id");
						if($old_img->c_img != "" && file_exists("public/upload/product/".$old_img->c_img))
							unlink("public/upload/product/".$old_img->c_img);
						//=====
						//lay ten file
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"],"public/upload/product/$c_img");
						//update truong c_img
						$this->model->execute("update tbl_product set c_img='$c_img' where pk_product_id=$id");
					}
					//di chuyen den trang san pham
					header("location:admin.php?controller=product");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_product&act=do_add";
					include "view/backend/add_edit_product.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_price= $_POST["c_price"];
					$c_hotproduct = isset($_POST["c_hotproduct"])?1:0;
					$c_saleproduct = isset($_POST["c_saleproduct"])?1:0;
					$fk_category_product_id = $_POST["fk_category_product_id"];
					$c_img = "";
					if($_FILES["c_img"]["name"] !=""){
						//lay ten file
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"],"public/upload/product/$c_img");
					}
					//thuc hien sql them moi ban ghi
					$this->model->execute("insert into tbl_product set c_name='$c_name',c_description='$c_description',c_price='$c_price',fk_category_product_id=$fk_category_product_id,c_hotproduct=$c_hotproduct,c_saleproduct=$c_saleproduct,c_img='$c_img'");
					//di chuyen den trang tin tuc
					header("location:admin.php?controller=product");
				break;
				case "delete":
					//=====
						//lay anh cu de xoa
						$old_img= $this->model->get_a_record("select c_img from tbl_product where pk_product_id=$id");
						if($old_img->c_img != "" && file_exists("public/upload/product/".$old_img->c_img))
							unlink("public/upload/product/".$old_img->c_img);
					//=====
				 $this->model->execute("delete from tbl_product where pk_product_id=$id");
				 header("location:admin.php?controller=product");
				break;
			}
		}
	}
	new controller_add_edit_product();
 ?>