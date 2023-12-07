window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    var navbar = document.querySelector(".nav");
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        navbar.classList.add("fixed");
    } else {
        navbar.classList.remove("fixed");
    }
}