<?php

require ("include/config.php");
require ("include/auto_login.php");

$USERID = $_POST['ID'];
$USERID = prep_input($USERID);
if(isset($USERID))
{
    $curr_USERID = $_SESSION['USERID'];
    $sql_select = "SELECT following FROM users WHERE USERID = '$curr_USERID'";
    $result_select = mysqli_query($link,$sql_select);
    while($record = mysqli_fetch_array($result_select))
    {
        $following = $record['following'];
    }
    
    $following_array = explode(',',$following);
    if(in_array($USERID,$following_array))
    {
        echo "You are already following that user";
        $error = 1;
    }
    
    if($curr_USERID == $USERID)
    {   
        echo "You can`t follow yourself";
        $error .= 2;
    }
    
    if($following == '')
    {
        $following .= $USERID;    
    }
    else
    {
        $following .= ','.$USERID;    
    }
    
    if($error == '')
    {
        $sql_query = "UPDATE users SET following = '$following' WHERE USERID = '$curr_USERID'";
        mysqli_query($link,$sql_query);
    }
}

?>