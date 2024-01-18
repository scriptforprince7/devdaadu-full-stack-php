<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Way Points JS -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<!-- Counter Up JS -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Slick Slider JS -->
<script src="assets/js/slick.min.js"></script>
<!-- Magnific Popup JS -->
<script src="assets/js/magnific-popup.min.js"></script>
<!-- Isotope JS -->
<script src="assets/js/isotope-3.0.6-min.js"></script>
<!-- Sticky JS -->
<script src="assets/js/jquery.sticky.js"></script>
<!-- Nice Select JS -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- Back To Top JS -->
<script src="assets/js/backToTop.js"></script>
<!-- Progress Bar JS -->
<script src="assets/js/jquery.barfiller.js"></script>
<!-- Circle Progress Bar JS -->
<script src="assets/js/circle-progress.min.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<script>
    var swiper = new Swiper('.tableSwiper', {
        direction: 'horizontal',
        spaceBetween: 40,
        grabCursor: true,
        a11y: false,
        freeMode: true,
        speed: 11000,
        loop: true,
        slidesPerView: "auto",
        autoplay: {
            delay: 0.5,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                /* when window >=0px - webflow mobile landscape/portriat */
                spaceBetween: 30,
            },
            480: {
                /* when window >=0px - webflow mobile landscape/portriat */
                spaceBetween: 30,
            },
            767: {
                /* when window >= 767px - webflow tablet */
                spaceBetween: 40,
            },
            992: {
                /* when window >= 988px - webflow desktop */
                spaceBetween: 40,
            }
        },
    });

    const clientSwiper = new Swiper('.client-swiper', {
        slidesPerView: 5,
        loop: true,
        speed: 2000,
        autoplay: {
            delay: 0.1,
            disableOnInteraction: false,
        },
    });

    function infinite() {
        swiper.slideTo(swiper.slides.length);
        swiper.once('transitionEnd', function() {
            swiper.slideTo(swiper.params.slidesPerView, 0, false);
            setTimeout(function() {
                infinite();
            }, 0);
        });
    }
    infinite();
</script>