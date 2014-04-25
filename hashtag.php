<?php

require ("include/config.php");
require ("include/auto_login.php");

$thebaseurl = $config['baseurl'];

$hash = $_GET['tag'];
$hash = prep_input($hash);
$hash = '#'.$hash;

$sql_select = "SELECT * FROM posts WHERE hashtag RLIKE '$hash' ORDER BY unix_time DESC";
$result = mysqli_query($link,$sql_select);
while($twits[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
STemplate::assign('twits',$twits);

$templateselect = "hashtag.tpl";

$page_title = $hash;
STemplate::assign('page_title',$page_title);

STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');

?>