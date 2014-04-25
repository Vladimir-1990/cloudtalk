<?php

require ("include/config.php");
require ("include/auto_login.php");

$page_title = "Favourites";
STemplate::assign('page_title',$page_title);

$thebaseurl = $config['baseurl'];

$USERID = $_GET['userid'];
$USERID = prep_input($USERID);

$sql_select_fav = "SELECT TID FROM favourites WHERE USERID = '$USERID'";
$result_fav = mysqli_query($link,$sql_select_fav);
while($fav_array[] = mysqli_fetch_array($result_fav,MYSQLI_ASSOC))
{   
    STemplate::assign('fav_array',$fav_array);
}

$instance = new counters($USERID);

$following_count = $instance -> count_following();
$followers_count = $instance -> count_followers();
$posts_count = $instance -> count_posts();
$fav_count = $instance -> count_fav();

$active_page = 'favourites';
STemplate::assign('active_page',$active_page);

$templateselect = "favourites.tpl";

STemplate::assign('USERID',$USERID);
STemplate::assign('following_count',$following_count);
STemplate::assign('followers_count',$followers_count);
STemplate::assign('posts_count',$posts_count);
STemplate::assign('fav_count',$fav_count);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');

?>