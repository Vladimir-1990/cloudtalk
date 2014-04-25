<?php
require ("include/config.php");

$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    if($_POST['reply_show'] == 1)
    {
        $ID = $_POST['ID'];
        $pieces = explode("_",$ID);
        $ID = $pieces[2];
        
        $sql_reply_select = "SELECT * FROM posts WHERE reply_to = '$ID' ORDER BY unix_time DESC";
        $result_reply = mysqli_query($link,$sql_reply_select);
        while($reply_twits[] = mysqli_fetch_array($result_reply,MYSQLI_ASSOC))
            STemplate::assign('reply_twits',$reply_twits);
        
        $sql_fav_select = "SELECT * FROM favourites WHERE TID = '$ID' LIMIT 4";
        $result_fav = mysqli_query($link,$sql_fav_select);
        while($fav[] = mysqli_fetch_array($result_fav,MYSQLI_ASSOC))
            STemplate::assign('fav',$fav);
            
        $total_favs = count_rows($sql_fav_select);
        STemplate::assign('total_favs',$total_favs);
        
        $USERID = $_POST['USERID'];
        $sql_repost_select = "SELECT TID,USERID FROM posts WHERE original_userid = '$USERID' LIMIT 4";
        $result_repost = mysqli_query($link,$sql_repost_select);
        while($repost[] = mysqli_fetch_array($result_repost,MYSQLI_ASSOC))
            STemplate::assign('repost',$repost);
            
        $total_repost = count_rows($sql_repost_select);
        STemplate::assign('total_repost',$total_repost);
    }
}

$templateselect = "show_posts_reply.tpl";
STemplate::display($templateselect);
?>