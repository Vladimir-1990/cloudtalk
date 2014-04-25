<div id="main_content">    
    <div id="left">
    Followers
    {section name=i loop=$followers_array}
        <div class="following_box">
            <div>
                {insert name=get_profile_image assign=profile_image value=var USERID=$followers_array[i].USERID}
                <img class="profile_image" src="profilepics/{$profile_image}" alt="{$username}"/> 
            </div>
            <div style="margin-top:20px;">
                {insert name=get_member_display_name assign=username value=var USERID=$followers_array[i].USERID}
                <a href="user.php?id={$followers_array[i].USERID}" class="username">{$username}</a>
                
                {insert name=get_follow_button_status assign=status value=var USERID=$followers_array[i].USERID curr_USERID=$smarty.session.USERID}
                {if $status == 1}
                <a id="{$followers_array[i].USERID}" class="unfollow">Unfollow</a>
                {elseif $status == 2}
                {elseif $status == 3}
                <a id="{$followers_array[i].USERID}" class="follow">Follow</a>
                {/if}
            </div>
        </div>
    {/section}    
    </div>
    
    <div id="right">
        {include file='profile_box.tpl'}
        {include file='footer_right.tpl'}
    </div>
    
</div>