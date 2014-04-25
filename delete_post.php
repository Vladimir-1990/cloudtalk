<?php

require ("include/config.php");

$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    $post_ID = $_POST['post_id'];
    $pieces = explode("_",$post_ID);
    $post_ID = $pieces[2];
    $post_ID = prep_input($post_ID);
    $sql_delete = "DELETE FROM posts WHERE TID = '$post_ID'";
    $sql_delete_fav = "DELETE FROM favourites WHERE TID = '$post_ID'";
    mysqli_query($link,$sql_delete);
    mysqli_query($link,$sql_delete_fav);
    echo "Post deleted";   
}

?>