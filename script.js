$(document).on("click", ".navigation a", reveal);

function reveal(e) {

    e.preventDefault();
        
    var id = $(this).attr("href");
    $(id).show();
    $(id).siblings().hide();


}


$(window).on("load", start);


function start()
{

        $(".navigation a:first").click();
        // $(".carousel").carousel();

}

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
     

     
    // Simulate physical button click effect
    $('.nav > button').click( function( e ) {
    var b = $(e.target).addClass( 'down' )
    setTimeout( function() { b.removeClass( 'down' ) }, 80 )
    } )
     
    $(document).keydown( function( e ) {
     
    switch( e.keyCode ) {
    /* left arrow */
    case 37:
    $('.nav > .left').click()
    break
     
    /* right arrow */
    case 39:
    $('.nav > .right').click()
    }
    })
    })