<?php 
	class model{
		//lay nhieu ban ghi
		public static function get_all($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			$arr = array();
			while($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
				return $arr;
		}
		//lay mot ban ghi
		public static function get_a_record($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			$rows = mysqli_fetch_object($result);
			return $rows;
		}
		//thuc thi cau truy van
		public static function execute($sql){
			global $db;
			//$result = mysqli_query($db,$sql) or die("Không truy vấn được");
			$insert_id = 0;
			if(mysqli_query($db,$sql))
				$insert_id = mysqli_insert_id($db);
			return $insert_id;
		}
		//dem so luong cac ban ghi
		public static function num_rows($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_num_rows($result);
		}
	}
 ?>
 