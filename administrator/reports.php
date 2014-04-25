<?php

require ("../include/config.php");

check_login($_SESSION['ID']);
header_info($_SESSION['ID']);

$start = 0;
$per_page = 4;
if(!isset($_GET['page']))
{
    $page = 1;
}
else
{
    $page = $_GET['page'];
}
if($page <= 1)
    $start = 0;
else
    $start = $page * $per_page - $per_page;

$sql_select = "SELECT * FROM reports ORDER BY USERID ASC";
$num_rows = count_rows($sql_select);
$num_pages = $num_rows / $per_page;
$num_pages = ceil($num_pages);
$sql_select .= " LIMIT $start, $per_page";

$result = mysqli_query($link,$sql_select);
while($reports[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
    STemplate::assign("reports",$reports);

$prev = $page - 1;
$next = $page + 1;

STemplate::assign('next',$next);
STemplate::assign('prev',$prev);
STemplate::assign('num_pages',$num_pages);
STemplate::display('administrator/header.tpl');
STemplate::display('administrator/reports.tpl');

?>