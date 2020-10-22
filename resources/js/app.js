require("./bootstrap");
require("./slick");

$(".slider-header").slick({
    lazyLoad: "ondemand",
    dots: true,
    infinite: true,
    speed: 1000,
    autoplaySpeed: 10000,
    arrows: false,
    fade: true,
    cssEase: "linear",
    autoplay: true,
    centerMode: true,
    slidesToShow: 1,
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [{
        breakpoint: 480,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: "40px",
            slidesToShow: 1
        }
    }]
});
