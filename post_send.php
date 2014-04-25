<?php

require ("include/config.php");

//inserting new twits in the db(ajax request)
$is_ajax = $_POST['is_ajax'];
if($is_ajax == 1)
{
    $reply_to = $_POST['reply_to'];
    $twit = $_POST['twit'];
    
    $reply_to = prep_input($reply_to);
    $twit = prep_input($twit);
    
    if($twit == '')
    {
        echo "2";
    }
    if(strlen($twit) > 140)
    {
        echo "3";
    }

    else
    {
        if($_POST['reply_to'] != '')
        {
            if($reply_to == '')
            {
                echo "2";
            }
            
            $reply_to_USERID = $_POST['reply_to_USERID'];
            $sql_addon1 = ",reply_to = '$reply_to', reply_to_USERID = '$reply_to_USERID'";
        }
        $USERID = mysqli_real_escape_string($link,$_SESSION['USERID']);
        $twit = mysqli_real_escape_string($link,$twit);
        //getting the hastag
        $pattern = '/#[A-Za-z0-9]+/';
        preg_match_all($pattern,$twit,$matches);
        $hashatags = implode(" ",$matches[0]);
        
        if($_FILES['images'] != '')
        {
            $file_name = $_FILES['images']['name'];
            $ext = substr(strrchr($file_name,'.'),1);
            $new_name = time().'-'.$USERID.'.'.$ext;
            move_uploaded_file( $_FILES["images"]["tmp_name"], "uploads/" . $new_name);
            $sql_addon2 = ",image = '$new_name'";
        }
        else
        {
            $sql_addon2 = NULL;
        }
          
        $time = date("d.m.Y,G:i:s");
        $unix_time = time();
        $sql_insert = "INSERT INTO posts SET USERID = '$USERID', content ='$twit', date_time = '$time', unix_time = '$unix_time', hashtag = '$hashatags' $sql_addon1 $sql_addon2";
        mysqli_query($link,$sql_insert);
    }
}

?>