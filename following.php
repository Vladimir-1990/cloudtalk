<?php

require ("include/config.php");
require ("include/auto_login.php");
$thebaseurl = $config['baseurl'];

$page_title = "Following";
STemplate::assign('page_title',$page_title);

$USERID = $_GET['userid'];
$USERID = prep_input($USERID);
$curr_USERID = $_SESSION['USERID'];

$sql_select = "SELECT following FROM users WHERE USERID = '$USERID'";
$result = mysqli_query($link,$sql_select);
while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    $following = $rows['following'];   
}

$following_array = explode(',',$following);
STemplate::assign('following_array',$following_array);

$instance = new counters($USERID);

$following_count = $instance -> count_following();
$followers_count = $instance -> count_followers();
$posts_count = $instance -> count_posts();
$fav_count = $instance -> count_fav();

$active_page = 'following';
STemplate::assign('active_page',$active_page);

$templateselect = "following.tpl";

STemplate::assign('USERID',$USERID);
STemplate::assign('following_count',$following_count);
STemplate::assign('followers_count',$followers_count);
STemplate::assign('posts_count',$posts_count);
STemplate::assign('fav_count',$fav_count);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');

?>