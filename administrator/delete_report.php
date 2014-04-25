<?php

require ("../include/config.php");

check_login($_SESSION['ID']);
header_info($_SESSION['ID']);

$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    $RID = $_POST['report_id'];
    $sql_delete = "DELETE FROM reports WHERE RID = '$RID'";
    mysqli_query($link,$sql_delete);
    echo "Report deleted";
}

?>