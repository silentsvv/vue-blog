<?php
require('../config/config.php');

class Search 
{
  function searchByText(){
    if(!empty($_GET['s'])){
      $search = $_GET['s'];
      $sql = "select * from article where title like '%".$search."%'";
    }else{
      $sql = "select * from article";
    }
    $data = array();
    $arr = array();

    if ($result = mysqli_query($GLOBALS['con'], $sql)) {
      while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
      }
      foreach ($data as $index => $array) {
        $temp = array();
        $temp['id'] = $array['id'];
        $temp['title'] = $array['title'];
        $temp['content'] = $array['content']; 
        $temp['type'] = $array['type'];
        $temp['time'] = $array['time'];
        array_push($arr,$temp);
      }
      print_r(json_encode($arr));
    } else {
      echo "false";
    }
  }
}

$init = new Search();
$init -> searchByText();

?>