<div id="main_content">    
    <div id="left">
    <div id="message" style="display:none"></div>
    Favourites
    <div id="all_twits">
    <div id="show_twits">
    {section name=z loop=$fav_array}
    {insert name=get_twit assign=twits value=var TID=$fav_array[z].TID}
    
        {include file="show_posts.tpl"}
    
    {/section}   
    </div>
    </div>
    </div>
       
    <div id="right">
        {include file='profile_box.tpl'}
        {include file='footer_right.tpl'}
    </div>
    
</div>