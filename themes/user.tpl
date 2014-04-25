<div id="main_content">

    <div id="left">
        <div id="message" style="display:none"></div>
        <a href="user" id="active_page" style="display:none"></a>
            {section name=i loop=$user_info}
            <a href="{$user_info[i].USERID}" id="USERID" style="display:none"></a>
            
            {insert name=get_member_display_name assign=username value=var USERID=$user_info[i].USERID}
            <p>User: {$username}</p>
            <p>About: {$user_info[i].bio}</p>
                
            {insert name=get_follow_button_status assign=status value=var USERID=$user_info[i].USERID curr_USERID=$smarty.session.USERID}
            {if $status == 1}
            <a id="{$user_info[i].USERID}" class="unfollow">Unfollow</a>
            {elseif $status == 2}
            {elseif $status == 3}
            <a id="{$user_info[i].USERID}" class="follow">Follow</a>
            {/if}
            
        {/section}
        
        <a href="#" id="show_new_twits_link" style="display:none;">show new twits</a>
        <div id="all_twits">
        
            <div id="show_new_twits" style="display:none;">
                <!--ajax response-->
            </div>
            
            <div id="show_twits">
                <!--ajax response-->
            </div>
            
            <div id="loading"></div>
        
        </div>
    
    </div>
    
    <div id="right">
        {include file='profile_box.tpl'}
        {include file='footer_right.tpl'}
    </div>
    
</div>