<?php

require ("include/config.php");
require ("include/auto_login.php");
$thebaseurl = $config['baseurl'];

$curr_USERID = $_SESSION['USERID'];
$USERID = $_GET['id'];
$USERID = prep_input($USERID);

$arg = array('USERID' => $_GET['id']);
$username = insert_get_member_display_name($arg);
STemplate::assign("page_title",$username);

if(isset($USERID))
{
    $user_exists = "SELECT USERID FROM users WHERE USERID = '$USERID'";   
    $rows = count_rows($user_exists);
    if($rows == 1)
    {
        $templateselect = "user.tpl";    
    }
    else
    {
        $templateselect = "no_user.tpl";       
    }

    $user_info_query = "SELECT A.USERID, B.bio FROM users A, users_details B WHERE A.USERID = '$USERID' AND B.USERID = '$USERID'";
    $result = mysqli_query($link,$user_info_query);
    while($user_info[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
    STemplate::assign('user_info',$user_info);
    
    //count following
    $instance = new counters($USERID);

    $following_count = $instance -> count_following();
    $followers_count = $instance -> count_followers();
    $posts_count = $instance -> count_posts();
    $fav_count = $instance -> count_fav();
    
    $active_page = 'user';
    STemplate::assign('active_page',$active_page);
}

STemplate::assign('USERID',$USERID);
STemplate::assign('following_count',$following_count);
STemplate::assign('followers_count',$followers_count);
STemplate::assign('posts_count',$posts_count);
STemplate::assign('fav_count',$fav_count);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END


?>