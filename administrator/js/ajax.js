$(document).ready(function()
{
    $('.delete_user').click(function(){
        var r=confirm("Are you sure!");
        if (r==true)
        {
            var userid = $(this).attr("id");
            var op_user = $(this).parents("tr");
            $(op_user).css("display","none");
            
            var action = "delete_user.php";
            var form_data =
    		{
    			is_ajax: 1,
    			userid: userid
    		};
    		$.ajax(
    		{
    			dataType: 'html',
    			type: "POST",
    			url: action,
    			data: form_data,
    			success: function(response)
    			{
                    $('.message').css("display","block");
                    $('.message').html(response);
    			}
    		});
        }
    });
    
    
    $('.delete_post').click(function(){
        var r=confirm("Are you sure!");
        if (r==true)
        {
            var post_id = $(this).attr("id");
                    
            var action = "delete_post.php";
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
    			success: function(response)
    			{
                    $('.message').css("display","block");
                    $('.message').html(response);
    			}
    		});
        }
    });
    
    $('.delete_admin').click(function(){
        var r=confirm("Are you sure!");
        if (r==true)
        {
            var admin_id = $(this).attr("id");
            var op_admin = $(this).parents("tr");
            $(op_admin).css("display","none");
                    
            var action = "delete_admin.php";
            var form_data =
    		{
    			is_ajax: 1,
    			admin_id: admin_id
    		};
    		$.ajax(
    		{
    			dataType: 'html',
    			type: "POST",
    			url: action,
    			data: form_data,
    			success: function(response)
    			{
                    $('.message').css("display","block");
                    $('.message').html(response);
    			}
    		});
        }
    });
    
    $('.delete_report').click(function(){
        var report_id = $(this).attr("id");
        var op_report = $(this).parents("tr");
        $(op_report).css("display","none");
                
        var action = "delete_report.php";
        var form_data =
		{
			is_ajax: 1,
			report_id: report_id
		};
		$.ajax(
		{
			dataType: 'html',
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
                $('.message').css("display","block");
                $('.message').html(response);
			}
		});
    });
     
}); //document ready end