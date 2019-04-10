$(document).ready(function(){
    $(window).scroll(function() {
        let navmenu=$('.nav-menu');
        if ($(window).scrollTop() >= 50) {

            navmenu.addClass("is-scrolling");
        } else {
            navmenu.removeClass("is-scrolling");
        }
    })
    let sitenav=$("#navbar");
    sitenav.on('show.bs.collapse',function () {
        $(this).parents('.nav-menu').addClass("menu-is-open");

    })
    sitenav.on('hide.bs.collapse',function () {
        $(this).parents('.nav-menu').removeClass("menu-is-open");

    })

    $('#open-box').click(function () {
        $('.login').addClass('login-show');
        $('body').addClass('stop-scorling');
    });
    $('#close-login-box').click(function() {
        $('.login').removeClass('login-show');
        $('body').removeClass('stop-scorling');
    });
    $('.login').click(function (e) {
        if(e.target !== this)
            return;
        $('.login').removeClass('login-show');
        $('body').removeClass('stop-scorling');
    });



})