<?php

require ("../include/config.php");

check_login($_SESSION['ID']);
header_info($_SESSION['ID']);

$sql_latest_users = "SELECT username, USERID, date_time FROM users ORDER BY date_time DESC LIMIT 5";
$result_latest_users = mysqli_query($link,$sql_latest_users) or die(mysqli_error($link));
while($latest_users[] = mysqli_fetch_array($result_latest_users,MYSQLI_ASSOC))
    STemplate::assign('latest_users',$latest_users);

$sql_latest_posts = "SELECT USERID, content, date_time FROM posts ORDER BY unix_time DESC LIMIT 5";
$result_latest_posts = mysqli_query($link,$sql_latest_posts) or die(mysqli_error($link));
while($latest_posts[] = mysqli_fetch_array($result_latest_posts,MYSQLI_ASSOC))
    STemplate::assign('latest_posts',$latest_posts);

STemplate::display('administrator/header.tpl');
STemplate::display('administrator/home.tpl');
STemplate::display('administrator/footer.tpl');

?>