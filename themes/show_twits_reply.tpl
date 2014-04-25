<script>
$('.tweet_submit_button_reply').click(function() {
	var action = "show_twits_reply.php";
    var ID = $('.show_twits_reply').next('.twit').attr("id");
    alert(ID);
	var form_data = {
		ID: ID,
		is_ajax: 1,
		reply_show: 1
	};
	$.ajax({
		dataType: 'html',
		type: "POST",
		url: action,
		data: form_data,
		success: function(response) {
			 var $twits = $("<div/>").html(response).find('.twit');
             $(".show_twits_reply").html($twits);
		}
	});
});

</script>

{section name=z loop=$reply_twits}
<div id="twit_id_{$reply_twits[z].TID}" class="twit"{if $smarty.session.USERID == $reply_twits[z].USERID}style="background-color:#E5E5E5"{/if}>
    <p class="twit_text">{$reply_twits[z].content}
    {$reply_twits[z].TID}
    {assign var=hashtags value=" "|explode:$reply_twits[z].hashtag}
    {section name=v loop=$hashtags}
    <a href="hashtag.php?hash={$hashtags[v]}">{$hashtags[v]}</a>
    {/section}
    
    </p>
    <p class="time">{$reply_twits[z].date_time}</p>
    <a href="user.php?id={$reply_twits[z].USERID}" class="username">{$reply_twits[z].username}</a>

</div>

<hr />
{/section}