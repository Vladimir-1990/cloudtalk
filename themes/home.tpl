<div id="main_content">
    <a href="home" id="active_page" style="display:none"></a>
    <a href="{$smarty.session.USERID}" id="USERID" style="display:none"></a>
    
    <div id="left">
        <div id="message" style="display:none"></div>
        
        <p>Say something:</p>
            
        <div id="twit_error_box"></div>
        <textarea id="new_twit" maxlength="140"></textarea>
        <p class="max-chars-top">140(used: <span class="charsused">0</span>)</p>
        
        <div id="image_upload" style="display:none;">
            <div class="file">Upload an image</div>
            <input type="file" name="images" class="images" />
            <div id="response"></div>
            <br />
        </div>
        <input type="submit" name="submit" value="Post" id="tweet_submit_button"/>
        
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
        <div id="profile_box">
            {insert name=get_profile_image assign=profile_image value=var USERID=$smarty.session.USERID}
            <img class="profile_image" src="profilepics/{$profile_image}" alt="{$username}"/>
            
            {insert name=get_member_display_name assign=username value=var USERID=$smarty.session.USERID}
            <a href="user.php?id={$smarty.session.USERID}" class="username">{$username}</a>
            
            <div id="stats">
                <div>
                    <a href="following.php?userid={$smarty.session.USERID}">Following: <span>{$following_count}</span></a>
                </div>
                <div>
                    <a href="followers.php?userid={$smarty.session.USERID}">Followers: <span>{$follewers_count}</span></a>
                </div>
                <div>
                    <a href="user.php?id={$smarty.session.USERID}">Posts: <span>{$twits_count}</span></a>
                </div>
                <div>
                    <a href="favourites.php?userid={$smarty.session.USERID}">Favourites: <span>{$fav_count}</span></a>
                </div>
            </div>
        </div>
        {include file='footer_right.tpl'}
    </div>

</div>