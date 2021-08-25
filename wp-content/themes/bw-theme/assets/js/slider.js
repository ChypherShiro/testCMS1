$(document).ready(function() {
    // body...
    $('a[href^="#"]').click(function(){
        var targer = $(this).attr('href');
        $('html,body').animate({
            scrollTop: $(targer).offset().top
        } , 500);
    })
})
