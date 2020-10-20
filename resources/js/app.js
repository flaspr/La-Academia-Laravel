require("./bootstrap");
require("./slick");

$(".slider-texto").slick({
    lazyLoad: "ondemand",
    dots: true,
    infinite: true,
    speed: 300,
    arrows: false,
    fade: true,
    cssEase: "linear",
    autoplay: true,
    centerMode: true,
    slidesToShow: 1,
    responsive: [
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 1
            }
        }
    ]
});
