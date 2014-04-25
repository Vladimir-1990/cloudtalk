{if $fav != ''}
    <div class="fav_container">
        <div class="left">
            <p>{$total_favs}<br /><span>Favourites</span></p>
        </div>
        <div class="right">
            {section name=y loop=$fav}
                {insert name=get_member_display_name assign=username value=var USERID=$fav[y].USERID}
                {insert name=get_profile_image assign=profile_image value=var USERID=$fav[y].USERID}
                <a href="user.php?id={$fav[y].USERID}" class="reply_to">
                <img class="profile_image" src="profilepics/{$profile_image}" alt="{$username}" title="{$username}"/>
                </a>
            {/section}
        </div>
    </div>
{/if}

{if $repost != ''}
    <div class="fav_container">
        <div class="left">
            <p>{$total_repost}<br /><span>Reposts</span></p>
        </div>
        <div class="right">
            {section name=y loop=$repost}
                {insert name=get_member_display_name assign=username value=var USERID=$repost[y].USERID}
                {insert name=get_profile_image assign=profile_image value=var USERID=$repost[y].USERID}
                <a href="user.php?id={$repost[y].USERID}" class="reply_to">
                <img class="profile_image" src="profilepics/{$profile_image}" alt="{$username}" title="{$username}"/>
                </a>
            {/section}
        </div>
    </div>
{/if}
{section name=z loop=$reply_twits}
    <div class="popup_box" id="delete_box">	<!-- OUR PopupBox DIV-->
        
        <div class="pop_box_top">
            <p class="pop_box_title">Are you sure you want to delete this post?</p>
            <a class="popupBoxClose">X</a>	
        </div>
        <div class="pop_box_bottom">
            <p class="pop_up_text">{$reply_twits[z].content}</p>
        </div>
        <div class="pop_up_action">
            <a href="" class="pop_up_button_confirm">delete</a>
            <a href="" class="pop_up_button_cancel">cancel</a>
        </div>
            
    </div>
    
    <div class="popup_box" id="report_box">	<!-- OUR PopupBox DIV-->
    
        <div class="pop_box_top">
            <p class="pop_box_title">Report this twit?</p>
            <a class="popupBoxClose">X</a>	
        </div>
        <div class="pop_box_bottom">
            <p class="pop_up_text">{$reply_twits[z].content}</p>
            <br />
            <p>Comment:</p>
            <textarea class="report_comment"></textarea>
        </div>
        <div class="pop_up_action">
            <a href="" class="pop_up_button_confirm">yes</a>
            <a href="" class="pop_up_button_cancel">no</a>
        </div>
    </div>
                
    <div id="twit_id_{$reply_twits[z].TID}" class="twit">
        
        <div class="top">
                {insert name=get_member_display_name assign=username value=var USERID=$reply_twits[z].USERID}
                <a href="user.php?id={$reply_twits[z].USERID}" class="username">{$username}&nbsp;</a>
                <a href="status.php?id={$reply_twits[z].TID}" target="_blank" class="time">{$reply_twits[z].date_time}</a>
                {insert name=get_fav_status assign=fav_status value=var USERID=$smarty.session.USERID TID=$reply_twits[z].TID}
                
                {if $fav_status == true}
                    <div class="favourite_tag"></div>
                {elseif $fav_status == false}
                    <div class="favourite_tag" style="display:none;"></div>
                {/if}
        </div>
    
        <div class="bottom">
            <div class="left">
                {insert name=get_profile_image assign=profile_image value=var USERID=$reply_twits[z].USERID}
                <img class="profile_image" src="profilepics/{$profile_image}" alt="{$username}"/>
            </div>
            
            <div class="right">
                    {if $reply_twits[z].reply_to_USERID != '0'}
                        {insert name=get_member_display_name assign=username value=var USERID=$reply_twits[z].reply_to_USERID}
                        <a href="user.php?id={$reply_twits[z].reply_to_USERID}" class="reply_to">@{$username}&nbsp;</a>
                    {/if}
                    
                    <p class="twit_text">
                        {insert name=prepare_post assign=post value=var twit=$reply_twits[z].content}
                        {$post} 
                    </p>
            </div> 
            
            <div class="action" style="display:none;">
                {if $reply_twits[z].USERID == $smarty.session.USERID}
                    <a class="delete_link">delete</a>          
                {/if}
                <a class="favourite_link">favourite</a>  
                {if $reply_twits[z].image != ''}
                    <a href="image.php?image_id={$reply_twits[z].image}" class="show_image_link" target="_blank">show image</a>
                {/if}
                <a class="report_link" style="float:left;">report</a>
            </div>   
        </div>
    </div>
{/section}