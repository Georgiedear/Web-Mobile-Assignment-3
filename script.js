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


}