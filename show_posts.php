<?php

require ("include/config.php");

$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    $limit = "LIMIT 10";
    $automatic = $_POST['automatic'];
    $USERID = $_POST['userid'];
    $end_id = $_POST['end_id'];
    $last_ID = $_POST['last_ID'];
    $page = $_POST['active_page'];

        if($automatic == 1)
        {
            $pieces = explode("_",$last_ID);
            $last_ID = $pieces[2];
            $sql_addon_no1 = "AND TID > '$last_ID'";
        }
        elseif($USERID != '' AND $automatic == 1)
        {
            $sql_addon_no1 = "AND USERID != '$USERID'";
        }

        $sql_select_following = "SELECT following FROM users WHERE USERID = '$USERID'";
        $result_select_following = mysqli_query($link,$sql_select_following);
        while($record = mysqli_fetch_array($result_select_following))
        {
            $following = $record['following'];
        }
        if($following != '')
        {
            $sql_addon_no2 = "AND (USERID IN ($following) OR USERID = '$USERID')";
        }
        else
        {
            $sql_addon_no2 = "AND USERID = '$USERID'";
        }

        if($end_id != '')
        {
            $pieces = explode("_",$end_id);
            $end_id = $pieces[2];
            $sql_addon_no3 = "AND TID < '$end_id'";
        }

    if($page == 'home')
    {
        $sql_select = "SELECT * FROM posts WHERE TID != '' $sql_addon_no1 $sql_addon_no2 $sql_addon_no3 ORDER BY unix_time DESC $limit";
        $result = mysqli_query($link,$sql_select);
        while($twits[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
            STemplate::assign('twits',$twits);
            
    }
    elseif($page == 'user')
    {
        $sql_select = "SELECT * FROM posts WHERE TID != '' $sql_addon_no1 $sql_addon_no2 $sql_addon_no3 AND USERID = '$USERID'  ORDER BY unix_time DESC $limit";
        $result = mysqli_query($link,$sql_select);
        while($twits[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
            STemplate::assign('twits',$twits);
    }
}

$templateselect = "show_posts.tpl";
STemplate::display($templateselect);

?>