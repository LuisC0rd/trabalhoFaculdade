$(document).ready(function () {
    $('#destaque').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
    });
});

function clickMenu() {
    var menu = document.querySelector('menu');
    if (menu.style.display === "flex") {
        menu.style.display = "none";
    } else {
        menu.style.display = "flex";
    }
}

//-----------------------------------------------------------------------------------------
