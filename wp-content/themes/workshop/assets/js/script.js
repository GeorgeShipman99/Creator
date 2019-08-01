    // menu icon
$(".mobmenu").click(function(){
    $(this).toggleClass("close");
    $("#nav").toggleClass("grow");
    $(".wrapper, #footer").toggleClass("shrink");
    $(".logo").toggleClass("left-shift");
    $(".logo_front").toggleClass("front-shift");
    $(".nav_container").delay(400).toggleClass("fadein");
    $(".flex_box_nav").toggleClass("flex_box_nav_menu");
    $(".nav_box").toggleClass("nav_box_menu");
    $(".first_box").toggleClass("first_box_menu");
    $(".second_box").toggleClass("second_box_menu");
});

$(window).scroll(function() {	  
if ($(this).scrollTop()> 0) {    
		$('.logo_back').css({'opacity':'0'});
     }  
    else {
	 	$('.logo_back').css({'opacity':'1'});
     }  
 });

$(document).ready(function() {
    var offset=250, // At what pixels show Back to Top Button
    scrollDuration=300; // Duration of scrolling to top
        $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
                $('.top').fadeIn(500);
                $('.menu_switch').addClass('hide'); // Time(in Milliseconds) of appearing of the Button when scrolling down.
                } else {
                $('.top').fadeOut(500);
                $('.menu_switch').removeClass('hide'); // Time(in Milliseconds) of disappearing of Button when scrolling up.
            }
});

// Smooth animation when scrolling
$('#to_the_top').click(function(event) {
    event.preventDefault();
            $('html, body').animate({
            scrollTop: 0}, scrollDuration);
               })
 });

$(function () {
    $(".loads").slice(0, 8).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".loads:hidden").slice(0, 2).slideDown();
        if ($(".loads:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 500);
    });
});

$(function () {
    $(".loadsblog").slice(0, 6).show();
    $("#loadMoreBlog").on('click', function (e) {
        e.preventDefault();
        $(".loadsblog:hidden").slice(0, 3).slideDown();
        if ($(".loadsblog:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 500);
    });
});


$('.menuBtn').click(function(){
  $(this).toggleClass('open');
  if($(this).hasClass( "open" )){
  $('.main-nav-bar div').addClass("appear");
  }
  
  else {
    $(this).removeClass("open");
  $('.main-nav-bar div').removeClass("appear");
  }
});


