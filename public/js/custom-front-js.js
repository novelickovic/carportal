
function checkMobile(){
    var win = $(this); //this = window
    if ($(document).scrollTop()>100) {
        $('#nav').removeClass('navbar-no-bg');
        $('#nav').addClass('sticky');
    }
    else {
        $('#nav').removeClass('sticky');
        $('#nav').addClass('navbar-no-bg');
    }

    if (win.width() < 800) {
        $('#nav').addClass('mobile');
        $('#nav').removeClass('navbar-no-bg');
        $('#nav').removeClass('sticky');

    } else {
        $('#nav').removeClass('mobile');
    }

};

$(document).ready(function () {
    checkMobile();//run when page first loads
});

$(window).resize(function () {
    checkMobile();//run on every window resize
});
$(window).scroll(function () {
    checkMobile();//run on every scroll
});