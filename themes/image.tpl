<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8" />
<link rel="icon" type="image/png" href="img/logo_icon.png" />
<link href="css/resest.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/ajax.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>

<title>{$page_title}</title>

</head>

<body>

<div class="image_box">
    <div id="all_twits">
        {section name=i loop=$data}
        
            <div class="image_container">
                <img src="uploads/{$data[i].image}" alt="post image not found" />
            </div>
            
            <div class="post_container">
                <div class="inner">
                    <div class="top">
                            {insert name=get_member_display_name assign=username value=var USERID=$data[i].USERID}
                            <a href="user.php?id={$data[i].USERID}" class="username">{$username}&nbsp;</a>
                            <a href="status.php?id={$data[i].TID}" target="_blank" class="time">{$data[i].date_time}</a>
                    </div>
                
                    <div class="bottom">
                        <div class="left">
                            {insert name=get_profile_image assign=profile_image value=var USERID=$data[i].USERID}
                            <img class="profile_image" src="profilepics/{$profile_image}" alt="{$username}"/>
                        </div>
                        
                        <div class="right">
                            {if $data[i].reply_to_USERID != '0'}
                                {insert name=get_member_display_name assign=username value=var USERID=$data[i].reply_to_USERID}
                                <a href="user.php?id={$data[i].reply_to_USERID}" class="reply_to">@{$username}&nbsp;</a>
                            {/if}
                            
                            <p class="twit_text" style="color:white;">
                                {insert name=prepare_post assign=post value=var twit=$data[i].content}
                                {$post} 
                            </p>
                        
                        </div>
                    </div>
                </div>
            </div>
        {/section}    
    </div>
</div>

</body>
</html>