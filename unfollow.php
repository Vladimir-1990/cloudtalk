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
    if (($key = array_search($USERID, $following_array)) !== false) {
        unset($following_array[$key]);
    }
    
    $following = implode(',',$following_array); 
    $sql_update = "UPDATE users SET following = '$following' WHERE USERID = '$curr_USERID'";
    mysqli_query($link,$sql_update);
}

?>