<?php

require ("include/config.php");
require ("include/auto_login.php");

$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    $post_ID = $_POST['post_id'];
    $pieces = explode("_",$post_ID);
    $post_ID = $pieces[2];
    $post_ID = prep_input($post_ID);
    
    $sql_select = "SELECT FIV FROM favourites WHERE USERID = '$_SESSION[USERID]' AND TID = '$post_ID'";
    $rows = count_rows($sql_select);
    if($rows == 1)
    {
        $sql_delete = "DELETE FROM favourites WHERE USERID = '$_SESSION[USERID]' AND TID = '$post_ID'";
        mysqli_query($link,$sql_delete);  
    }
    else
    {
        $sql_insert = "INSERT INTO favourites SET USERID = '$_SESSION[USERID]', TID = '$post_ID'";
        mysqli_query($link,$sql_insert);  
    }
}

?>