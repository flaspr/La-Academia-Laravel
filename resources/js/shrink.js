window.onscroll = function() {
    scrollFunction();
};

$(window).resize(scrollFunction);

function scrollFunction() {
    if (document.body.clientWidth >= 576) {
        if (
            document.body.scrollTop > 80 ||
            document.documentElement.scrollTop > 80
        ) {
            document.getElementById("navbar").classList.remove("py-3");
            document.getElementById("logo").classList.remove("logo-grande");
            document.getElementById("navbar").classList.add("py-1");
            document.getElementById("logo").classList.add("logo-pequeño");
        } else {
            document.getElementById("navbar").classList.remove("py-1");
            document.getElementById("logo").classList.remove("logo-pequeño");
            document.getElementById("navbar").classList.add("py-3");
            document.getElementById("logo").classList.add("logo-grande");
        }
    } else {
        document.getElementById("navbar").classList.remove("py-3");
        document.getElementById("navbar").classList.add("py-1");
        document.getElementById("logo").classList.remove("logo-grande");
        document.getElementById("logo").classList.add("logo-pequeño");
    }
}
