<?php
require('../config/config.php');

class CommentAdd
{
  function add(){
    if(empty($_POST['username']) || empty($_POST['content'])){
      echo "false";
    }else if(empty($_POST['article_id'])){
      echo "false";
    }

    $id = $_POST['article_id'];
    $username = $_POST['username'];
    $content = $_POST['content'];

    $sql = "INSERT INTO comment (article_id, username, content) VALUES ('$id','$username','$content')";

    if(mysqli_query($GLOBALS['con'],$sql)){
      echo "success";
    }else{
      echo "<script>alert('插入失败')</script>";
    }
  }
}

$method = new CommentAdd();
$method -> add();


?>