<?php
require('../config/config.php');

class CommentList
{
  function showComments(){
    $id = $GLOBALS['_POST']['id'];
    $sql = "select * from comment where article_id =".$id;
    $data = array();
    $arr = array();

    if ($result = mysqli_query($GLOBALS['con'], $sql)) {
      while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
      }
      foreach ($data as $index => $array) {
        $temp = [];
        $temp['username'] = $array['username'];
        $temp['content'] = $array['content']; 
        $temp['time'] = $array['time'];
        array_push($arr,$temp);
      }
      print_r(json_encode($arr));
    } else {
      echo "false";
    }
  }
}

$init = new CommentList();

if(!empty($_POST['id'])){
  $init -> showComments();
}else{
  $init -> showComments();
}

?>