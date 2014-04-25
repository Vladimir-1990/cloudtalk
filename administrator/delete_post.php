<?php

require ("../include/config.php");

check_login($_SESSION['ID']);
header_info($_SESSION['ID']);

$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    $post_id = $_POST['post_id'];
    $sql_delete = "DELETE FROM posts WHERE TID = '$post_id'";
    mysqli_query($link,$sql_delete);
    echo "Post deleted";
}

?>