<?php

	require('../config/config.php');

	$sql = "select * from article";
	$data = array();
	$arr = array();


	if ($result = mysqli_query($con, $sql)) {
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

	mysqli_close($con);
?>