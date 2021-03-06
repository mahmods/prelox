$(function() {
    "use strict";
    $(".video-frame iframe").attr("width","100%");
    $(".video-frame iframe").attr("height","100%");
    //Open Button Menu 
    $(".button-bg").click(function() {
        $(".menu-icon").toggleClass("go");
        $(".menu").slideToggle();
    });
    $("[data-src]").each(function() {
        var backgroundImage = $(this).attr("data-src");
        $(this).css("background-image", "url(" + backgroundImage + ")");
    });
    $(".navbar .menu a").click(function() {
        $(".navbar a").removeClass("active");
        $(this).addClass("active");
    });
    // Start Header Slider 
    $('.header-slider').slick({
        dots: true,
        rtl: true,
        autoplay: true,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
    });


    //Testmonial Slider
    $('.testmonial-slider').slick({
        dots: true,
        rtl: true,
        autoplay: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    // Articl Slider

    $('.article-slider').slick({
        dots: true,
        rtl: true,
        autoplay: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    //Boutton Go Up


    var button = $("#button-up");
    $(window).scroll(function() {
        $(this).scrollTop() >= 400 ? button.show() : button.hide();
    });
    button.click(function() {
        $('html,body').animate({
            scrollTop: 0
        }, 600);
    });

    //model Box
    var modal = document.getElementById('myModal');
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    if(btn) {
        btn.onclick = function() {
            modal.style.display = "block";
        }
    }
    if(span) {
        span.onclick = function() {
            modal.style.display = "none";
        }
    }
    if(window) {
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }
});