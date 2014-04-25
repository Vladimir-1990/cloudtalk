$(document).ready(function()
{
    //styling the file button
    var wrapper = $('<div/>').css({height:0,width:0,'overflow':'hidden'});
    var fileInput = $('.images').wrap(wrapper);

    fileInput.change(function(){
        $this = $(this);
        $('.file').text($this.val());
    })
    
    $('.file').click(function(){
        fileInput.click();
    }).show();
    //////////////////////
    
    function updateCharsCount(){
		var used = $('#new_twit').val().length;
		$('.charsused').html(used);
	};
    
    $(function(){
		$("#datepicker").datepicker(
		{
			changeMonth: true,
			changeYear: true,
			dateFormat: "dd-mm-yy",
			yearRange: '1950:2005'
		});
	});
    
   	function popup(div)
	{

		//Getting the variable's value from a link 
		op_div = div;

		//Fade in the Popup
		$(op_div).fadeIn(300);


		//Set the center alignment padding + border see css style
		var popMargTop = ($(op_div).height() + 24) / 2;
		var popMargLeft = ($(op_div).width() + 24) / 2;

		$(op_div).css(
		{
			'margin-top': -popMargTop,
			'margin-left': -popMargLeft
		});

		// Add the mask to body
		$('body').append('<div id="popup_cover"></div>');
		$('#popup_cover').fadeIn(300);

		return false;
	}
    
    $("#menu_username").click(function(){
        $(this).next().slideToggle();
    });
    
	$('.text_box').click(function(){
		$('.text_box').each(function()
        {
			$(this).css("border-color", "#7E7E7E");
		});
		$(this).css("border-color", "#56B4EF");
	});

	$('#show_pass').click(function(){
		$(this).parent().next().slideToggle('slow', function()
		{
		});
	});
    
   	$('#new_twit').focus(function(){
		$("#image_upload").css("display","block");
	});
    
	$('#new_twit').focusout(function(){
		var used = $(this).val().length;
		if (used == '')
		{
			$("#image_upload").css("display","none");
		}
	});

	$('#new_twit').focus(function(){
		$(this).css("height", "80");
	});

	$('#new_twit').focusout(function(){
		var used = $(this).val().length;
		if (used == '')
		{
			$(this).css("height", "20");
		}
	});

    if ($('#new_twit').length != 0){
		updateCharsCount();
		$('#new_twit').keyup(function()
		{
			updateCharsCount();
		});
	};

	$('#new_twit').keyup(function(){
		var used = $('#new_twit').val().length;
		if (used > '130')
		{
			$('.charsused').css("color", "red");
		}
		else
		{
			$('.charsused').css("color", "white");
		}
	});

	$('#show_new_twits_link').click(function(){
		$('#show_new_twits').slideToggle('slow', function()
		{
		
		});
	});
    
	$(document).on('click', '.twit', function(){
		$(this).next('.details').slideToggle(function()
		{
		});
	});
    
	$(document).on("click", ".username", function(e){
		e.stopPropagation();
	});

	$(document).on("click", ".delete_link", function(e){
		e.stopPropagation();
	});
    
    $(document).on("click", ".favourite_link", function(e){
		e.stopPropagation();
	});
    
   	$(document).on("click", ".show_image_link", function(e){
		e.stopPropagation();
	});
    
   	$(document).on("click", ".report_link", function(e){
		e.stopPropagation();
	});
    
   	$(document).on("click", ".repost_link", function(e){
		e.stopPropagation();
	});
    
   	$(document).on("click", ".hash_tag", function(e){
	e.stopPropagation();
    }); 

	$(document).on('focus', '.twit_text_reply', function(){
		$(this).css("height", "80");
	});

	$(document).on('mouseenter', '.twit', function(){
		$(this).find('.action').css('display', 'block');
	});

	$(document).on('mouseleave', '.twit', function(){
		$(this).find('.action').css('display', 'none');
	});

	$(document).on('click', '.popupBoxClose, #popup_cover, .pop_up_button_cancel', function(event)
	{
		event.preventDefault();
		$(".popup_box").fadeOut(300);
		$('#popup_cover').remove();

	});

	$(document).on('click', '.delete_link', function()	{
		var op_twit = $(this).parents('.twit').prev().prev();
		popup(op_twit);
	});
    
   	$(document).on('click', '.report_link', function()	{
		var op_twit = $(this).parents('.twit').prev('#report_box');
		popup(op_twit);
	});
    

	$(document).on('focusout', '.twit_text_reply', function(){
		var used = $(this).val().length;
		if (used != '')
		{
			$(this).css("height", "80");
		}
		else
		{
			$(this).css("height", "20");
		}
	});

	$(document).on('keyup', '.twit_text_reply', function(){
        if ($(this).val().length)
		{
			var used = $(this).val().length;
			$(this).siblings('.max-chars-top').children('.charsused_reply').html(used);

		};
		if (used > '130')
		{
			$(this).siblings('.max-chars-top').children('.charsused_reply').css("color", "red");
		}
		else
		{
			$(this).siblings('.max-chars-top').children('.charsused_reply').css("color", "white");
		}
	});
    
   

}); //document ready end