{literal}
<script src="js/show_twits.js"></script>
{/literal}

{section name=i loop=$twits}
<div id="twit_id_{$twits[i].TID}" class="twit"{if $smarty.session.USERID == $twits[i].USERID}style="background-color:#E5E5E5"{/if}>
    <p class="twit_text">{$twits[i].content}
    {$twits[i].TID}
    {assign var=hashtags value=" "|explode:$twits[i].hashtag}
    {section name=z loop=$hashtags}
    <a href="hashtag.php?hash={$hashtags[z]}">{$hashtags[z]}</a>
    {/section}
    
    </p>
    <p class="time">{$twits[i].date_time}</p>
    <a href="user.php?id={$twits[i].USERID}" class="username">{$twits[i].username}</a>

</div>

<div class="details" style="display:none;">
    <textarea class="twit_text_reply" maxlength="140"></textarea>
    <input type="submit" name="submit" value="tweet" class="tweet_submit_button_reply" />
    <input type="hidden" name="reply_to" value="{$twits[i].TID}" class="reply_to"/>
    <p class="max-chars-top">140(used: <span class="charsused_reply">0</span>)</p>
    
    <div class="show_twits_reply" id="test">
    
                
            
    </div>   
   
</div>

<hr />
{/section}