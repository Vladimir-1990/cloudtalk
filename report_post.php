<?php

require("include/config.php");

$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    $comment = $_POST["comment"];
    $post_ID = $_POST['post_id'];
    $comment = prep_input($comment);
    $post_ID = prep_input($post_ID);
    $USERID = $_SESSION["USERID"];
    
    $pieces = explode("_",$post_ID);
    $post_ID = $pieces[2];
    $time = date("d.m.Y,G:i:s");
    $unix_time = time();
    $sql_insert = "INSERT INTO reports SET TID = '$post_ID', comment = '$comment', USERID = '$USERID', date_time = '$time', unix_time = '$unix_time'";
    mysqli_query($link,$sql_insert);
    echo "Post reported";   
}

?>