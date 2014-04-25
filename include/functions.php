<?php
function send_mail($to,$subject,$message)
{
    mail($to,$subject,$message,$headers);
}

function prep_input($string)
{
    $link = $GLOBALS['link'];
    $string = mysqli_real_escape_string($link,$string);
    $string = stripslashes($string);
    $string = strip_tags($string);
    
    return $string;
}

function count_rows($sql_query)
{
    $link = $GLOBALS['link'];//getting the link var in the config.php file
    $result = mysqli_prepare($link,$sql_query);
    mysqli_stmt_execute($result);
    mysqli_stmt_store_result($result);
    $rows = mysqli_stmt_num_rows($result);
    return ($rows);   
}

function insert_get_member_display_name($var)
{
    $link = $GLOBALS['link'];
    $USERID = $var['USERID'];
    $USERID = mysqli_real_escape_string($link,$USERID);
    $query="SELECT A.display_name,B.username FROM users_details A,users B WHERE A.USERID='$USERID' AND B.USERID='$USERID' limit 1";
    $result_query = mysqli_query($link,$query);
    while($record = mysqli_fetch_array($result_query))
    {
        $display_name = $record['display_name'];
        $username = $record['username'];
    }
    if($display_name == '')
    {
        return $username;
    }
    else
    {
        return $display_name;
    }
}

function insert_prepare_post($var)
{
    $content_array = explode(" ", $var['twit']);
    $output = '';
    
    foreach($content_array as $content)
    {
        //starts with http://
        if(substr($content, 0, 7) == "http://")
        $content = '<a href="' . $content . '">' . $content . '</a>';
        
        //starts with https://
        if(substr($content, 0, 8) == "https://")
        $content = '<a href="' . $content . '">' . $content . '</a>';
        
        //starts with www.
        if(substr($content, 0, 4) == "www.")
        $content = '<a href="http://' . $content . '" target="_blank">' . $content . '</a>';
        
        $output .= " " . $content;
                
    }
    
    $output = trim($output);
    
    $post = preg_replace('/#(\w+)/', '<a href="hashtag.php?tag=\1" class="hash_tag">#\1</a>', $output);
    
    return $post;  
}

function insert_get_profile_image($var)
{
    $link = $GLOBALS['link'];
    $USERID = $var['USERID'];
    $USERID = mysqli_real_escape_string($link,$USERID);
    $query="SELECT profile_image FROM users_details WHERE USERID='$USERID' limit 1";
    $result_query = mysqli_query($link,$query);
    while($record = mysqli_fetch_array($result_query))
    {
        $profile_image = $record['profile_image'];
    }
    if($profile_image == '')
    {
        return "default-profile.png";
    }
    else
    {
        return $profile_image;    
    }   
}

class counters
{
    private $USERID;
    
    function __construct($USERID) {
        $this->USERID = $USERID;
    }
    
    function count_following()
    {
        $link = $GLOBALS['link'];
        $sql_select_following = "SELECT following FROM users WHERE USERID = '$this->USERID'";
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
        return $following_count;       
    }
    
    function count_followers()
    {
        $sql_select_followers = "SELECT USERID FROM users WHERE FIND_IN_SET('$this->USERID',following)";
        $follewers_count = count_rows($sql_select_followers);
        return $follewers_count;
    }
    
    function count_posts()
    {   
        $sql_select_twits = "SELECT TID FROM posts WHERE USERID = '$this->USERID'";
        $twits_count = count_rows($sql_select_twits); 
        return $twits_count;
    }
    function count_fav()
    {        
        $sql_select_fav = "SELECT FIV FROM favourites WHERE USERID = '$this->USERID'";
        $fav_count = count_rows($sql_select_fav);
        return $fav_count;
    }   
}

function insert_get_follow_button_status($var)
{
    $link = $GLOBALS['link'];
    $sql_select = "SELECT following FROM users WHERE USERID = '$var[curr_USERID]'";
    $result_select = mysqli_query($link,$sql_select);
    while($record = mysqli_fetch_array($result_select))
    {
        $following = $record['following'];
    }
    //code 1 -> already following 2 -> current user, 3 -> not following
    $following_array = explode(',',$following);
    if(in_array($var['USERID'],$following_array))
    {
        $message = 1;
    }
    elseif($var['curr_USERID'] == $var['USERID'])
    {
        $message = 2;
    }
    else
    {
        $message = 3;
    }
    
    return $message;
}

function insert_get_fav_status($var)
{
    $link = $GLOBALS['link'];
    $sql_select = "SELECT * FROM favourites WHERE TID = '$var[TID]' AND USERID = '$var[USERID]'";
    $rows = count_rows($sql_select);
    if($rows == 1)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function insert_get_twit($var)
{
    $link = $GLOBALS['link'];
    $sql_select = "SELECT * FROM posts WHERE TID = '$var[TID]' ORDER BY unix_time DESC";
    $result = mysqli_query($link,$sql_select);
    while($twits[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        return $twits;
    }
}

?>