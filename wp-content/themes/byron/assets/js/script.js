jQuery.noConflict();

jQuery(function ($) {
    $(document).ready(function () {
        $('.sidenav').sidenav();

        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {
                var target = $(this.hash);
                var heightNav = $('nav').height();
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top-heightNav
                    }, 500);
                    return false;
                }
            }
        });
    });    
});
