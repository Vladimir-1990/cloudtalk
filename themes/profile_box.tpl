<div id="profile_box">
    {insert name=get_profile_image assign=profile_image value=var USERID=$USERID}
    <img class="profile_image" src="profilepics/{$profile_image}" alt="{$username}"/>
    
    {insert name=get_member_display_name assign=username value=var USERID=$USERID}
    <a href="user.php?id={$USERID}" class="username">{$username}</a>
    
    <div id="stats">
        <div>
            <a href="following.php?userid={$USERID}" {if $active_page == 'following'}class="active"{/if}>Following: <span>{$following_count}</span></a>
        </div>
        <div>
            <a href="followers.php?userid={$USERID}" {if $active_page == 'followers'}class="active"{/if}>Followers: <span>{$followers_count}</span></a>
        </div>
        <div>
            <a href="user.php?id={$USERID}" {if $active_page == 'user'}class="active"{/if}>Posts: <span>{$posts_count}</span></a>
        </div>
        <div>
            <a href="favourites.php?userid={$USERID}" {if $active_page == 'favourites'}class="active"{/if}>Favourites: <span>{$fav_count}</span></a>
        </div>
    </div>
</div>