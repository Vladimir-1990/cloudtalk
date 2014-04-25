$(document).ready(function()
{
	var action = $("#form").attr('action');
	//username check
	$('#username').change(function()
	{
		var form_data =
		{
			username: $(this).val(),
			is_ajax: 1
		};
		$("#username_status").html('<img src="img/loader.gif" align="absmiddle">&nbsp;Checking...');
		$.ajax(
		{
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
				if (response == '1')
				{
					$('#username_status').html('<p class="status_error"><strong>Username to short(5 charters min)</strong></font>');
				}
				else if (response == '2')
				{
					$('#username_status').html('<p class="status_ok"><strong>Username available</strong></font>');
				}
				else if (response == '3')
				{
					$('#username_status').html('<p class="status_error"><strong>Username already in use</strong></font>');
				}
			}
		});
	});
	//username check end

	//mail check begin
	$('#email').change(function()
	{
		var form_data =
		{
			email: $(this).val(),
			is_ajax: 1
		};
		$("#email_status").html('<img src="img/loader.gif" align="absmiddle">&nbsp;Checking...');
		$.ajax(
		{
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
				if (response == '1')
				{
					$('#email_status').html('<p class="status_ok"><strong>Email valid</strong></font>');
				}
				else if (response == '2')
				{
					$('#email_status').html('<p class="status_error"><strong>Email not valid</strong></font>');
				}
				else if (response == '3')
				{
					$('#email_status').html('<p class="status_error"><strong>Email already used</strong></font>');
				}
			}
		});
	});
	//email check end

	//password check begin
	$('#password').change(function()
	{
		var form_data =
		{
			password: $(this).val(),
			is_ajax: 1
		};
		$("#password_status").html('<img src="img/loader.gif" align="absmiddle">&nbsp;Checking...');
		$.ajax(
		{
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
				if (response == '1')
				{
					$('#password_status').html('<p class="status_error"><strong>Too short</strong></font>');
				}
				else if (response == '2')
				{
					$('#password_status').html('<p class="status_ok"><strong>OK</strong></font>');
				}
			}
		});
	});
	//password check end

	//repeat pasword check begin
	$('#repeat_password').change(function()
	{
		var form_data =
		{
			repeat_password: $(this).val(),
			password: $('#password').val(),
			is_ajax: 1
		};
		$("#repeat_password_status").html('<img src="img/loader.gif" align="absmiddle">&nbsp;Checking...');
		$.ajax(
		{
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
				if (response == '1')
				{
					$('#repeat_password_status').html('<p class="status_error"><strong>Passwords don`t match</strong></font>');
				}
				else if (response == '2')
				{
					$('#repeat_password_status').html('<p class="status_ok"><strong>OK</strong></font>');
				}
			}
		});
	});
	//password check end

	var active_page = $("#active_page").attr("href");
	var userid = $('#USERID').attr('href');

	if (active_page == 'home' || active_page == 'user')
	{
	   
		//twits show on load begin        
		var action = "show_posts.php";
        $("#working").html("<img src='img/ajax-loader.gif' />");
		var form_data =
		{
			is_ajax: 1,
			userid: userid,
			active_page: active_page
		};
		$.ajax(
		{
			dataType: 'html',
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
                $("#working").css("display","none");
				$('#show_twits').html(response);
			}
		});
        //twit show on load end
        
        //twit send begin
		$(document).on('click', '#tweet_submit_button', function(){
            $("#working").css("display","block");
            $("#working").html("<img src='img/ajax-loader.gif' />");   
            formdata = new FormData();
            $("#response").html("uploading...");
            var file = $(this).prev().find(".images")[0];
            var len = file.files.length;
        
        	for (var i=0 ; i < len; i++ ) {
        		file = file.files[i];
				formdata.append("images", file);
       	    }
                    
			var action = "post_send.php";
            formdata.append("twit", $("#new_twit").val());
            formdata.append("is_ajax", 1);
            formdata.append("userid", userid);
            
			$.ajax({
				dataType: 'html',
				type: "POST",
				url: action,
				data: formdata,
                processData: false,
        		contentType: false,
                async: false,
				success: function(response)
				{
				    $('#show_new_twits_link').css('display', 'none');
				    $("#working").css("display","none");
					if (response == 2)
					{
						$('#message').html("Post can`t be empty");
						$('#message').css("display", "block");
					}
                    else if(response == 3)
                    {
                        $('#message').html("Post too long");
						$('#message').css("display", "block");
                    }
					else
					{
						$('#message').css("display", "none");
                        $('#response').css("display", "none");
					}
				}
			});
		});
		//twit send end

		//twits show on send button click begin 
		$(document).on('click', '#tweet_submit_button', function(){
            $("#working").css("display","block");
            $("#working").html("<img src='img/ajax-loader.gif' />"); 
			$('#new_twit').val('');
            $('#images').val('');
			var action = "show_posts.php";
			var form_data =
			{
				is_ajax: 1,
				userid: userid,
				active_page: active_page
			};
            
			$.ajax(
			{
				dataType: 'html',
				type: "POST",
				url: action,
				data: form_data,
                async: false,
				success: function(response)
				{
				    $("#working").css("display","none");
					$('#show_twits').html(response);
				}
			});
		});
		//twit show on send button click end
        
		//automatic twit update begin
		function automatic_twit_update(){
			var last_ID = $('#show_twits .twit:first').attr("id");
			var action = "show_posts.php";
			var form_data =
			{
				is_ajax: 1,
				automatic: 1,
				last_ID: last_ID,
				userid: userid,
				active_page: active_page
			};
			$.ajax(
			{
				dataType: 'html',
				type: "POST",
				url: action,
				data: form_data,
				success: function(response)
				{
					
					if (response)
					{
						$('#show_new_twits_link').css('display', 'block');
					}
					else
					{
						$('#show_new_twits_link').css('display', 'none');
					}

					$('#show_new_twits_link').click(function()
					{
						$("#show_twits").prepend(response);
                        $('#show_new_twits_link').css('display', 'none');
					});

				}
			});
		}

		var refreshId = setInterval(automatic_twit_update, 5000);
		//automatic twit uppdate end

		//load more fn begin
		function load_more(){
            var end_id = $(".twit:not(.details .twit):last").attr("id");
			var action = "show_posts.php";
			var form_data =
			{
				is_ajax: 1,
				end_id: end_id,
				userid: userid,
				active_page: active_page
			};
			$("#loading").html('<p>Loading more...<img src="img/loader.gif" align="absmiddle">');
			$.ajax(
			{
				type: "POST",
				url: action,
				data: form_data,
				success: function(response)
				{
					if (response)
					{
						$("#show_twits").append(response);
					}
					else
					{
						$("#loading").hide();
					}
				}
			},1000);
		}
		//load more fn end

		//show more on scrool bottom
		$(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() == $(document).height())
            {
                setTimeout(load_more,100)
            }
		});
		//show more on scrool bottom end

	} //home check and user pages check end
    
    //delete twit begin
    $(document).on('click', '#delete_box .pop_up_button_confirm', function(event){
		event.preventDefault();
		var action = "delete_post.php";
		var id = $(this).parents('.popup_box').nextAll('.twit').attr('id');
        
		$('[id='+id+']').css('display', 'none');
		$(this).parents('#delete_box').nextAll('.details').css('display', 'none');

		var form_data =
		{
			is_ajax: 1,
			post_id: id
		};
		$.ajax(
		{
			dataType: 'html',
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
				$(".popup_box").fadeOut(300);
				$('#popup_cover').remove();
				$('#message').html(response);
				$('#message').css("display", "block");
			}
		});
    });
    //delete twit end
    
    //report twit begin
    $(document).on('click', '#report_box .pop_up_button_confirm', function(event){
		event.preventDefault();
		var action = "report_post.php";
		var id = $(this).parents('.popup_box').nextAll('.twit').attr('id');
        var comment = $(this).parents('.popup_box').find('.report_comment').val();
		var form_data =
		{
			is_ajax: 1,
			post_id: id,
            comment: comment
		};
		$.ajax(
		{
			dataType: 'html',
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
				$(".popup_box").fadeOut(300);
				$('#popup_cover').remove();
				$('#message').html(response);
				$('#message').css("display", "block");
			}
		});
    });
    //report twit end
    
    //favourite twit begin
    $(document).on('click', '.favourite_link', function(event){
        var action = "favourite.php";
		var id = $(this).parents('.twit').attr('id');
        var fav_tag = $(this).parents('.twit').find(".favourite_tag");
        if ($(fav_tag).is(":hidden"))
        {
            $(fav_tag).css("display","block");
            $(this).html("favorited");
        }
        else
        {
            $(fav_tag).css("display","none"); 
            $(this).html("favorite");
        }

		var form_data =
		{
			is_ajax: 1,
			post_id: id
		};
		$.ajax({
			dataType: 'html',
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
				
			}
		});
    });

	//showing replys on twit click
    $(document).on('click', '.twit', function(){
        if ($(this).next().is(":hidden")) {
            $("#working").css("display","block");
            $("#working").html("<img src='img/ajax-loader.gif' />");
    		var ID = $(this).attr("id");
    		var action = "show_post_reply.php";
    		var where = $(this).next('.details').children('.show_twits_reply');
            var USERID = $(this).next('.details').children('.reply_to_USERID').val();
    		var form_data =
    		{
    			ID: ID,
    			is_ajax: 1,
    			reply_show: 1,
                USERID: USERID
    		};
    		$.ajax(
    		{
    			dataType: 'html',
    			type: "POST",
    			url: action,
    			data: form_data,
    			success: function(response)
    			{
    			    $("#working").css("display","none");
    				$(where).html(response);
    			}
    		});
        }
	});
	//showing replys on twit click end

	//sending reply twits
	$(document).on('click', '.tweet_submit_button_reply', function(){
        $("#working").css("display","block");
        $("#working").html("<img src='img/ajax-loader.gif' />"); 
        formdata = new FormData();
        $("#response").html("uploading...");
        var file = $(this).prev().find(".images")[0];
        var len = file.files.length;
        
        for (var i=0 ; i < len; i++ ) {
        	file = file.files[i];
			formdata.append("images", file);
       	}
                    
        var action = "post_send.php";	     
		
		var twit_text = $(this).prevAll('.twit_text_reply').val();
		var reply_to = $(this).siblings('.reply_to').val();
		var reply_to_USERID = $(this).siblings('.reply_to_USERID').val();
        var op_post = $(this).prevAll('.reply_message');
        
        formdata.append("twit", twit_text);
        formdata.append("reply_to", reply_to);
        formdata.append("reply_to_USERID", reply_to_USERID);
        formdata.append("is_ajax", 1);
        
		$.ajax({
            dataType: 'html',
			type: "POST",
			url: action,
			data: formdata,
            processData: false,
            contentType: false,
            async: false,
			success: function(response)
            {
                $("#working").css("display","none");
                if(response == 2)
                {
                    $(op_post).css('display','block');
                    $(op_post).html("Reply can`t be empty");
                }
                else
                {
                    $(op_post).css('display','none');
                
                }
			}

		});
	});
    //sending reply twits end

	//show replys on twit click send
	$(document).on('click', '.tweet_submit_button_reply', function(){
	    $("#working").css("display","block");
        $("#working").html("<img src='img/ajax-loader.gif' />"); 
		var action = "show_post_reply.php";
		var ID = $(this).parent().prev().attr("id");
		var where = $(this).siblings('.show_twits_reply');
        var USERID = $(this).siblings('.reply_to_USERID').val();
		var form_data =
		{
			ID: ID,
			is_ajax: 1,
			reply_show: 1,
            USERID: USERID
		};
		$.ajax(
		{
			dataType: 'html',
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
			     $("#working").css("display","none");
				$(where).html(response);
			}
		});
	});
    
    //repost begin 
	$(document).on('click', '.repost_link', function(){
        $("#working").css("display","block");
        $("#working").html("<img src='img/ajax-loader.gif' />"); 
        var post_id = $(this).parents('.twit').attr('id');
		var action = "repost.php";
		var form_data =
		{
			is_ajax: 1,
			post_id: post_id
		};
        
		$.ajax(
		{
			dataType: 'html',
			type: "POST",
			url: action,
			data: form_data,
            async: false,
			success: function(response)
			{
			    $("#working").css("display","none");
			}
		});
	});
	//repost end
        
	//twits show on repost button click begin 
	$(document).on('click', '.repost_link', function(){
        $("#working").css("display","block");
        $("#working").html("<img src='img/ajax-loader.gif' />"); 
		$('#new_twit').val('');
        $('#images').val('');
		var action = "show_posts.php";
		var form_data =
		{
			is_ajax: 1,
			userid: userid,
			active_page: active_page
		};
        
		$.ajax(
		{
			dataType: 'html',
			type: "POST",
			url: action,
			data: form_data,
            async: false,
			success: function(response)
			{
			    $("#working").css("display","none");
				$('#show_twits').html(response);
			}
		});
	});
	//twit show on repost button click end
    
    //follow ajax
   	$(document).on('click', '.follow', function(){
        $(this).html("Unfollow"); 
        $(this).attr("class","unfollow");
  		var action = "follow.php";
		var ID = $(this).attr("id");
		var form_data =
		{
			ID: ID,
			is_ajax: 1
		};
		$.ajax(
		{
			dataType: 'html',
			type: "POST",
			url: action,
			data: form_data,
			success: function(response){}
		});  
    });
    
    //unfollow ajax
    $(document).on('click', '.unfollow', function(){
        $(this).html("Follow");
        $(this).attr("class","follow"); 
        var action = "unfollow.php";
		var ID = $(this).attr("id");
		var form_data =
		{
			ID: ID,
			is_ajax: 1
		};
		$.ajax(
		{
			dataType: 'html',
			type: "POST",
			url: action,
			data: form_data,
			success: function(response){}
		});          
    });

}); //document ready end