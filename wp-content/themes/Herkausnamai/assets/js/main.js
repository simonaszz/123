$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrllTop() > 1) {
            $('.page-title').addClass("sticky");
        }
        else {
            $('.page-title').removeClass("stiky");
        }
    });
});