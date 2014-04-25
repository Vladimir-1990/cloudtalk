<?php

require ("../include/config.php");

check_login($_SESSION['ID']);
header_info($_SESSION['ID']);

$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    $ID = $_POST['admin_id'];
    $sql_delete = "DELETE FROM administrators WHERE ID = '$ID'";
    mysqli_query($link,$sql_delete);
    echo "Admin deleted";
}

?>