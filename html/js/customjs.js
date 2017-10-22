$(".dropdown-button").dropdown();

//Vertical Tab Function

$(document).ready(function(){
    $('.slider').slider();
});

//show reply box

$("#reply-button").click(function(){
    $("#reply-box")(function(){
            $(this).show();
    });
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


//Search course
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

//Search question
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL-qs");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}


//mega menu function

function openCourse(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("megaMenuAr-tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("megaMenu-tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

jQuery(document).ready(function($) {
    $(".megaMenu-tablinks").hover(function() {

    });
});

