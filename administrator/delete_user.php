<?php

require ("../include/config.php");

check_login($_SESSION['ID']);
header_info($_SESSION['ID']);

$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    $USERID = $_POST['userid'];
    $sql_delete = "DELETE FROM users WHERE USERID = '$USERID'";
    mysqli_query($link,$sql_delete);
    echo "User deleted";
}

?>