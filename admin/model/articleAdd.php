<?php
require('../config/config.php');

class ArticleMethod
{
  function addArticle(){
    $title = $GLOBALS['_POST']['title'];
    $type = $GLOBALS['_POST']['type'];
    $content = $GLOBALS['_POST']['content'];
    $sql = "INSERT INTO article (title, type, content) VALUES ('$title','$type','$content')";
    print_r($sql);
    if (mysqli_query($GLOBALS['con'], $sql)) {
        echo "success";
    } else {
        echo "<script>alert('插入失败');window.location='../'</script>";
    }
  }
}

$method = new ArticleMethod();

if(!empty($_POST['method'])){
  if($_POST['method'] == 'add')
  {
    $method -> addArticle();
  }
}else{
  $method -> addArticle();
}

?>