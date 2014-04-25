<?php

require ("include/config.php");

//inserting new twits in the db(ajax request)
$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    $post_ID = $_POST['post_id'];
    $pieces = explode("_",$post_ID);
    $post_ID = $pieces[2];
    $post_ID = prep_input($post_ID);
    if($post_ID != '')
    {
        $sql_select = "SELECT * FROM posts WHERE TID = '$post_ID'";
        $result = mysqli_query($link,$sql_select);
        while($record = mysqli_fetch_array($result))
        {
            $USERID = $record['USERID'];
            $content = $record['content'];
            $hashtag = $record['hashtag'];
            $reply_to = $record['reply_to'];
            $reply_to_USERID = $record['reply_to_USERID'];
            $image = $record['image'];
            $original_userid = $record['original_userid'];
        }
        if($original_userid != '0')
        {
            $sql_addon = ",original_userid = '$original_userid'";
        }
        else
        {
            $sql_addon = ",original_userid = '$USERID'";   
        }
        $time = date("d.m.Y,G:i:s");
        $unix_time = time();
        $sql_insert = "INSERT INTO posts SET USERID = '$_SESSION[USERID]', content = '$content', date_time = '$time', unix_time = '$unix_time', hashtag = '$hastag', reply_to = '$reply_to', reply_to_USERID = '$reply_to_USERID' $sql_addon, image = '$image'";
        mysqli_query($link,$sql_insert);
    }
    
}

?>