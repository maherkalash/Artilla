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

//nic scroll Function
jQuery.fn.niceScroll = function() {
    $(this).click(function(e) {
        var h = $(this).attr('href'),
            target;

        if (h.charAt(0) == '#' && h.length > 1 && (target = $(h)).length > 0){
            var pos = Math.max(target.offset().top, 0);
            e.preventDefault();
            $('body,html').animate({
                scrollTop : pos
            }, 'slow', 'swing');
        }
    });
};
$('.scroll').niceScroll();

//modal function
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});