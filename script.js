$(document).on("click", ".navigation a", reveal);

function reveal(e) {

    e.preventDefault();
     //THIS FADE IN LASTS FOR 3 SECONDS AFTER A MENU BUTTON HAS BEEN CLICKED ON   
    var id = $(this).attr("href");
    $(id).fadeIn(3000);
    $(id).siblings().hide();


}


$(window).on("load", start);


function start()
{

        $(".navigation a:first").click();

}
//JS FOR CONTROLLING THE NAV BAR'S BEHAVIOUR
$(function() {
    var navCarousel = $("#navCarousel")
     
    navCarousel.Cloud9Carousel( {
    yPos: 4,
    yRadius: 8,
    mirrorOptions: {
    gap: 5,
    height: 0.2
    },
    buttonLeft: $(".nav > .left"),
    buttonRight: $(".nav > .right"),
    autoPlay: false,
    bringToFront: true,
 
    } )
     
    })