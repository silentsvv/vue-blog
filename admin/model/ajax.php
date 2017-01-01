<?php
require('../config/config.php');

class article
{

	function showList(){
		$sql = "select * from article";
		$data = array();
		$arr = array();

		if ($result = mysqli_query($GLOBALS['con'], $sql)) {
			while ($row = mysqli_fetch_array($result)) {
	      $data[] = $row;
	    }
			foreach ($data as $index => $array) {
				$temp = [];
				$temp['id'] = $array['id'];
				$temp['title'] = $array['title'];
				$temp['content'] = $array['content'];	
				array_push($arr,$temp);
			}
			print_r(json_encode($arr));
		} else {
		  echo "false";
		}
	}

	function showArticle(){
		$id = $GLOBALS['_POST']['id'];
		$sql = "select * from article where id =".$id;
		$result = mysqli_query($GLOBALS['con'], $sql);
		$row = mysqli_fetch_array($result);
		$temp = [];
		$temp['id'] = $row['id'];
		$temp['title'] = $row['title'];
		$temp['content'] = $row['content'];	
		print_r(json_encode($temp));
	}
}

$init = new article();


if(!empty($_POST['id'])){
	$init -> showArticle();
}else{
	$init -> showList();
}

?>