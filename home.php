<?php

require ("include/config.php");
require ("include/auto_login.php");
$thebaseurl = $config['baseurl'];

$page_title = "Home";
STemplate::assign('page_title',$page_title);

if(isset($_SESSION['USERID']))
{
    $page = 'home';
    STemplate::assign('page',$page);
    
    $sql_select_following = "SELECT following FROM users WHERE USERID = '$_SESSION[USERID]'";
    $result_following = mysqli_query($link,$sql_select_following);
    while($record = mysqli_fetch_array($result_following))
    {
        $following = $record['following'];
    }
    
    $following_array = explode(',',$following);
    if($following_array[0] != '')
    {
        $following_count = count($following_array);
    }
    else
    {
        $following_count = 0;
    }
    //count followers
    $sql_select_followers = "SELECT USERID FROM users WHERE ($_SESSION[USERID] IN (following))";
    $follewers_count = count_rows($sql_select_followers);
    //count posts
    $sql_select_twits = "SELECT TID FROM posts WHERE USERID = '$_SESSION[USERID]'";
    $twits_count = count_rows($sql_select_twits);
    //count fav
    $sql_select_favs = "SELECT FIV FROM favourites WHERE USERID = '$_SESSION[USERID]'";
    $fav_count = count_rows($sql_select_favs);
   
}
else
{
    header("location:login.php");
}

$templateselect = "home.tpl";
STemplate::assign('following_count',$following_count);
STemplate::assign('follewers_count',$follewers_count);
STemplate::assign('twits_count',$twits_count);
STemplate::assign('fav_count',$fav_count);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END

?>