<?php

require ("include/config.php");
require ("include/auto_login.php");

$page_title = "Followers";
STemplate::assign('page_title',$page_title);

$thebaseurl = $config['baseurl'];
$USERID = $_GET['userid'];
$USERID = prep_input($USERID);
$curr_USERID = $_SESSION['USERID'];

$sql_select = "SELECT USERID FROM users WHERE FIND_IN_SET('$USERID',following)";
$result = mysqli_query($link,$sql_select);
while($followers_array[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    STemplate::assign('followers_array',$followers_array);
}

$instance = new counters($USERID);

$following_count = $instance -> count_following();
$followers_count = $instance -> count_followers();
$posts_count = $instance -> count_posts();
$fav_count = $instance -> count_fav();

$active_page = 'followers';
STemplate::assign('active_page',$active_page);

$templateselect = "followers.tpl";

STemplate::assign('USERID',$USERID);
STemplate::assign('following_count',$following_count);
STemplate::assign('followers_count',$followers_count);
STemplate::assign('posts_count',$posts_count);
STemplate::assign('fav_count',$fav_count);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');

?>