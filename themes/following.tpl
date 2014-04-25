<div id="main_content">    
    
    <div id="left">
    Following
    {if $following_array[0] != ''}
        {section name=i loop=$following_array}
            <div class="following_box">
                <div>
                    {insert name=get_profile_image assign=profile_image value=var USERID=$following_array[i]}
                    <img class="profile_image" src="profilepics/{$profile_image}" alt="{$username}"/> 
                </div>
                <div style="margin-top:20px;">
                    {insert name=get_member_display_name assign=username value=var USERID=$following_array[i]}
                    <a href="user.php?id={$following_array[i]}" class="username">{$username}</a>
                    
                    {insert name=get_follow_button_status assign=status value=var USERID=$following_array[i] curr_USERID=$smarty.session.USERID}
                    {if $status == 1}
                    <a id="{$following_array[i]}" class="unfollow">Unfollow</a>
                    {elseif $status == 2}
                    {elseif $status == 3}
                    <a id="{$following_array[i]}" class="follow">Follow</a>
                    {/if}
                </div>
            </div>
        {/section} 
    {/if}   
    </div>
    
    <div id="right">
        {include file='profile_box.tpl'}
        {include file='footer_right.tpl'}
    </div>

</div>