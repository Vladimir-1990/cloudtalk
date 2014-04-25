<?php

require ("include/config.php");

$page_title = "Post image";
STemplate::assign("page_title",$page_title);

$image_id = $_GET['image_id'];
$image_id = prep_input($image_id);
$select = "SELECT * FROM posts WHERE image = '$image_id'";
$result = mysqli_query($link,$select);
while($data[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
    STemplate::assign('data',$data);

$templateselect = "image.tpl";
STemplate::display($templateselect);

?>