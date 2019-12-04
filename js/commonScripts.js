
$(document).ready(function(){
    $('.slick-slider').slick({
        centerMode: false,
        centerPadding: "60px",
        slidesToShow: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
    });
});

$(".sidebar__button").click(function(){
    $(".sidebar__wrapper").fadeToggle();
    $(".sidebar__button").toggleClass("sidebar__open");
    $(".sidebar__open .btn").text("Close");
});        