<?php

require ("include/config.php");
require ("include/auto_login.php");

$arg = array(USERID => $_SESSION['USERID']);
$username = insert_get_member_display_name($arg);

$page_title = $username."'s status";
STemplate::assign('page_title',$page_title);

$thebaseurl = $config['baseurl'];

$twit_id = $_GET['id'];
$twit_id = prep_input($twit_id);

$sql_select = "SELECT * FROM posts WHERE TID = '$twit_id' ORDER BY unix_time DESC";
$result = mysqli_query($link,$sql_select);
while($twits[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
STemplate::assign('twits',$twits);

$sql_reply_select = "SELECT * FROM posts WHERE reply_to = '$twit_id' ORDER BY unix_time DESC";
$result_reply = mysqli_query($link,$sql_reply_select);
while($reply_twits[] = mysqli_fetch_array($result_reply,MYSQLI_ASSOC))
STemplate::assign('reply_twits',$reply_twits);

$templateselect = "status.tpl";

STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');

?>