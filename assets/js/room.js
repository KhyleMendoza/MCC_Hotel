$(document).ready(function() {
    $("#book-now-btn").click(function(e) {
        if ($(window).width() < 768) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $("#reservation-section").offset().top
            }, 1000);
        } else {
            window.location.href = "#";
        }
    });
});
