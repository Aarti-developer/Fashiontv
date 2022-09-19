// ========================================================================= //
// Scroll to Top Script
// ========================================================================= //
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});


// Link button
$("button").each(function () {
    $(this).click(function () {
        $('html, body').animate({
            scrollTop: $($(this).attr("aria-controls")).offset().top - $($(this).attr("aria-controls")).height() / 2
        }, 500);
    });
});

// ========================================================================= //
// Common Carousel
// ========================================================================= //

$('.common-carousel').owlCarousel({
    items: 1,
    lazyLoad: true,
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    // responsiveClass:true,
    navText: ["<span class='d-none'>Previous</span><i class='fas fa-caret-left'></i>", "<span class='d-none'>Next</span><i class='fas fa-caret-right'></i>"],
    responsive: {
        0: {
            items: 1,
            margin: 0,
            dots: true,
        },
        767: {
            items: 2,
        },
        991: {
            items: 3
        },
        1199: {
            items: 4,
        }
    }
})


    // (function () {


    //     gsap.registerPlugin(ScrollTrigger);

    //     let revealContainers = document.querySelectorAll(".reveal");

    //     revealContainers.forEach((container) => {
    //         let image = container.querySelector("video");
    //         let tl = gsap.timeline({
    //             scrollTrigger: {
    //                 trigger: container,
    //                 toggleActions: "restart none none reset",
    //             },
    //         });

    //         tl.set(container, {
    //             autoAlpha: 1
    //         });
    //         tl.from(container, 1.5, {
    //             xPercent: -100,
    //             ease: Power2.out,
    //         });
    //         tl.from(image, 1.5, {
    //             xPercent: 100,
    //             scale: 1.3,
    //             delay: -1.5,
    //             ease: Power2.out,
    //         });
    //     });
    // }());

