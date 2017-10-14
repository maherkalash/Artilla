//Dropdown function
$(".dropdown-button").dropdown();

//slider Function
$(document).ready(function(){
    $('.slider').slider();
});


//show reply box
$("#reply-button").click(function(){
    $("#reply-box").show();
});


/*Hover Tab [Header Nav (MEGA MENU)]
jQuery(document).ready(function($) {
    $(".tab-titles div").hover(function() {
        $(".tab-content").hide();
        $(".tab-titles div").removeClass('active');
        $(this).addClass("active");
        var selected_tab = $(this).find("a").attr("href");
        $(selected_tab).stop().fadeIn();
        return false;
    });
});*/

$(document).ready(function(){
    $(".megaMenu-tablinks").hover(function(){
            $(".megaMenuAr-tabcontent").fadeout();
        },
        function(){

        });
});
