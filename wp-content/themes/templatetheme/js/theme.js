jQuery(function($) {
    var $ = jQuery;
    $('.top').click(function(event){
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
    var waypoint = new Waypoint({
        element: document.getElementById('header'),
        handler: function() {
            $(".top").toggleClass('show');
        },
        offset: -500
    });
    $('a[href*=#]').click(function(event){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        event.preventDefault();
    });
});