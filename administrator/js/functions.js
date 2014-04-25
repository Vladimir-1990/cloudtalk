$(document).ready(function()
{
    $('#show_pass').click(function(){
        $(this).next().slideToggle('slow', function()
        {
        });
    });
    
    $(".add_new").click(function(){
        $(this).next().slideToggle(); 
    });
    
    $("#menu_username").click(function(){
        $(this).next().slideToggle();
    });
}); //document ready end