{section name=i loop=$twits}     
    <div class="popup_box" id="delete_box">	<!-- OUR PopupBox DIV-->
    
        <div class="pop_box_top">
            <p class="pop_box_title">Are you sure you want to delete this post?</p>
            <a class="popupBoxClose">X</a>	
        </div>
        <div class="pop_box_bottom">
            <p class="pop_up_text">{$twits[i].content}</p>
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
            <p class="pop_up_text">{$twits[i].content}</p>
            <br />
            <p>Comment:</p>
            <textarea class="report_comment"></textarea>
        </div>
        <div class="pop_up_action">
            <a href="" class="pop_up_button_confirm">yes</a>
            <a href="" class="pop_up_button_cancel">no</a>
        </div>
        
    </div>
      
    <div id="twit_id_{$twits[i].TID}" class="twit">
            {if $twits[i].original_userid != '0'}  
                {insert name=get_member_display_name assign=username value=var USERID=$twits[i].original_userid}
                {insert name=get_profile_image assign=profile_image value=var USERID=$twits[i].original_userid}
                {$id = $twits[i].original_userid}
            {else}
                {insert name=get_member_display_name assign=username value=var USERID=$twits[i].USERID}
                {insert name=get_profile_image assign=profile_image value=var USERID=$twits[i].USERID}
                {$id = $twits[i].USERID}
            {/if}
        <div class="top">  
            <a href="user.php?id={$id}" class="username">{$username}</a>
            <a href="status.php?id={$twits[i].TID}" target="_blank" class="time">{$twits[i].date_time}</a>
            {insert name=get_fav_status assign=fav_status value=var USERID=$smarty.session.USERID TID=$twits[i].TID}
            {if $fav_status == true}
                <div class="favourite_tag"></div>
            {elseif $fav_status == false}
                <div class="favourite_tag" style="display:none;"></div>
            {/if}
        </div>
    
        <div class="bottom">
            <div class="left">
                
                <img class="profile_image" src="profilepics/{$profile_image}" alt="{$username}"/>
            </div>
            
            <div class="right">
                {if $twits[i].reply_to_USERID != '0'}
                    {insert name=get_member_display_name assign=username value=var USERID=$twits[i].reply_to_USERID}
                    <a href="user.php?id={$twits[i].reply_to_USERID}" class="reply_to">@{$username}&nbsp;</a>
                {/if}
                <p class="twit_text">
                    {insert name=prepare_post assign=post value=var twit=$twits[i].content}
                    {$post} 
                </p>
                {if $twits[i].original_userid != '0'}  
                    {insert name=get_member_display_name assign=username value=var USERID=$twits[i].USERID}    
                    <span class="reposted">reposted by <a href="user.php?id={$twits[i].USERID}">{$username}</a></span>
                {/if}
                {if $twits[i].reply_to != '0'}
                    <a class="reposted" href="status.php?id={$twits[i].reply_to}">View conversation</a>
                {/if}
                                           
            </div>
            
            <div class="action" style="display:none;">
                {if $twits[i].USERID == $smarty.session.USERID}
                    <a class="delete_link">delete</a>          
                {/if}
                {if $twits[i].USERID != $smarty.session.USERID}
                    <a class="repost_link">repost</a>          
                {/if}
                <a class="favourite_link">favourite</a>
                {if $twits[i].image != ''}
                    <a href="image.php?image_id={$twits[i].image}" class="show_image_link" target="_blank">show image</a>
                {/if}
                <a class="report_link" style="float:left;">report</a>
            </div>  
        </div>
    
    </div>

    <div class="details" style="display:none;">   
        <div class="show_twits_reply">
             
        </div>
        
        <div class="reply_message"></div> 
        <textarea class="twit_text_reply" maxlength="140" placeholder="reply to @{$username}"></textarea>
        <p class="max-chars-top">140(used: <span class="charsused_reply">0</span>)</p>  
        
        <div id="image_upload">
            <div class="file">Upload a file</div>
            <input type="file" name="images" class="images" />
            <div id="response"></div>
            <br />
        </div>
        
        <input type="submit" name="submit" value="Post" class="tweet_submit_button_reply" />
        <input type="hidden" name="reply_to" value="{$twits[i].TID}" class="reply_to" />
        <input type="hidden" name="reply_to_USERID" value="{$twits[i].USERID}" class="reply_to_USERID" />
        
       
    </div>
{/section}