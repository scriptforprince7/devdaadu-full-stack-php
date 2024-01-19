<?php
include 'panel/db/config.php';

// include('lock2.php');
// if (isset($_GET['del'])) {
// 	$t_id = $_GET['del'];
	// $query = mysqli_query($conn, "delete from tbl_service where service_id=$t_id");
// 	if ($query) {
// 		header('Location:' . BASE_URL . 'manage-services.php');
// 	}
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Dinesh Arora | Tax Advisor & Financial Consulting</title>
    <?php include 'includes/head.php' ?>
</head>

<body class="white-bg">

    <?php include 'includes/header.php' ?>
    <!-- Hero Area  -->

    <div class="hero-area hero-area-two">
        <div class="homepage-slides owl-carousel">
            <div class="single-slide-item">
                <div class="slider-bg bg-cover" data-background="assets/img/slider/slide-1.jpg">
                    <div class="overlay-2-disabled"></div>
                    <div class="container">
                        <div class="hero-area-content">
                            <h3 class="text-center" style="display: block;">Make Your Taxes Easy</h3>
                            <h1 class="text-center">Reliable & Trusted <br>Advice</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide-item">
                <div class="slider-bg bg-cover" data-background="assets/img/slider/slide-2.jpg">
                    <div class="overlay-2-disabled"></div>
                    <div class="container">
                        <div class="hero-area-content">
                            <h3 class="text-center" style="display: block;">Make Your Taxes Easy</h3>
                            <h1 class="text-center">Reliable & Trusted <br>Advice</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide-item">
                <div class="slider-bg bg-cover" data-background="assets/img/slider/slide-3.jpg">
                    <div class="overlay-2-disabled"></div>
                    <div class="container">
                        <div class="hero-area-content">
                            <h3 class="text-center" style="display: block;">Make Your Taxes Easy</h3>
                            <h1 class="text-center">Reliable & Trusted <br>Advice</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section  -->

    <div class="feature-section section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="section-title">
                        <h2>We Have Than More <a href="about.php">25 Years of Experience</a> <br>
                            in Tax Advisor & Financial Consulting <br>
                            Services
                        </h2>
                    </div>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sint tempora voluptate! Quae, mollitia! Adipisci consequatur a, necessitatibus ipsa ipsam dignissimos. Rerum alias soluta odio enim, aperiam minima iure quasi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate mollitia eaque alias. Repellendus vero corporis facere, distinctio atque commodi omnis nam .
                    </p>

                </div>
            </div>
        </div>
    </div>


    <!-- table area -->
    <style>
        .feature-section {
            padding-top: 50px;
        }

        .feature-section h2 {
            font-size: 40px;
        }


        .tableSwiper {
            /* height: 600px; */
            width: 100%;
        }

        .stable {
            margin-top: 50px;
            overflow-x: hidden;
            overflow-y: hidden;

        }
    </style>
    <section>
        <div class="stable">
            <!-- Slider main container -->
            <div class="tableSwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <table cellspacing="3" cellpadding="3">
                            <tbody>
                                <tr class="font_sty">
                                    <td width="1%">SENSEX
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span class="value">72,303.85</span><br><span class=""><img src="https://my-eoffice.com/img/down.png"> -106.53 (-0.15%) </span>
                                    </td>
                                    <td width="1%">GOLD
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span class="value">63346.00</span><br><span class=""><img src="https://my-eoffice.com/img/down.png"> -43.00 (-0.07%) </span>
                                    </td>
                                    <td width="1%">SILVER
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span class="value">74404.00</span><br><span class=""><img src="https://my-eoffice.com/img/down.png"> -555.00 (-0.74%) </span>
                                    </td>
                                    <td width="1%">Crude
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span class="value">6003.00</span><br><span class=""><img src="https://my-eoffice.com/img/down.png"> -45.00 (-0.74%) </span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class="swiper-slide">
                        <table>
                            <tbody>
                                <tr>
                                    <td width="1%">USD/INR
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span class="value">83.157</span><br><span class=""><img src="https://my-eoffice.com/img/down.png"> -0.039 (-0.05%) </span>
                                    </td>
                                    <td width="1%">EURO
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span class="value">92.0940</span><br><span class=""><img src="https://my-eoffice.com/img/up.png"> +0.1235 (+0.13%) </span>
                                    </td>
                                    <td width="1%">UK
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span class="value">106.166</span><br><span class=""><img src="https://my-eoffice.com/img/up.png"> +0.267 (+0.25%) </span>
                                    </td>
                                    <td width="1%">YEN
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span class="value">58.8777</span><br><span class=""><img src="https://my-eoffice.com/img/up.png"> +0.0761 +0.13% </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Feature Area  -->

    <div class="kyc-section feature-section feature-two section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 wow fadeInLeft animated" data-wow-delay="600ms">
                    <div class="single-feature-item">
                        <div class="feature-item-inner">
                            <div class="feature-icon">
                                <i class="flaticon-hr"></i>
                            </div>
                            <div class="feature-title">
                                <h4 class="text-white">
                                    Check your status of KYC
                                </h4>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks</p>

                                <div class="btn-container">
                                    <a href="#" class="main-btn">
                                        Check Status
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 wow fadeInLeft animated" data-wow-delay="600ms">
                    <div class="single-feature-item">
                        <div class="feature-item-inner">
                            <div class="feature-icon">
                                <i class="flaticon-hr"></i>
                            </div>
                            <div class="feature-title">
                                <h4 class="text-white">
                                    Check your status of KYC
                                </h4>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks</p>

                                <div class="btn-container">
                                    <a href="#" class="main-btn">
                                        Check Status
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section  -->

    <!-- Why Choose Us  -->
    <div class="feature-section section-padding">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 text-center">
                    <div class="section-title">
                        <p>WHY CHOOSE US</p>
                        <h2>We Provide High-Quality Accounting
                            & Tax Service</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="100ms">
                    <div class="feature-item-wrap">
                        <div class="feature-icon">
                            <i class="flaticon-goal"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Financial Health Check</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit magni</p>
                            <div class="btn-container text-center">
                                <a href="#" class="main-btn">
                                    Go Check
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="feature-item-wrap">
                        <div class="feature-icon">
                            <i class="flaticon-group"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Financial Fact Finder</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit magni</p>
                            <div class="btn-container text-center">
                                <a href="#" class="main-btn">
                                    Go Check
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="300ms">
                    <div class="feature-item-wrap">
                        <div class="feature-icon">
                            <i class="flaticon-customer-service"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Goal Based Planning</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit magni</p>
                            <div class="btn-container text-center">
                                <a href="#" class="main-btn">
                                    Go Check
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- CTA Section  -->

    <div class="cta-area cta-three bg-cover" data-background="assets/img/cta-bg.jpg">
        <div class="overlay"></div>
        <div class="cta-area-inner pt-100">
            <div class="container">
                <div class="offset-xl-2 col-xl-6 offset-lg-1 col-lg-6 col-md-8">
                    <div class="section-title">
                        <p>GET STARTED</p>
                        <h2 class="text-white">Changing Your Lives,
                            Changing Your Futures</h2>
                    </div>
                    <a href="about.php" class="main-btn mt-20">Discover More</a>
                </div>

                <div class="offset-xl-4 col-xl-7 offset-lg-4 col-lg-7 offset-md-4 col-md-7">
                    <p class="text-white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words look even slightly believable. If you are going to use a passage </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Solution Section  -->

    <style>
        .solution-section {
            padding-bottom: 100px !important;
        }
    </style>

    <div class="solution-section section-padding pb-0">
        <div class="row">
            <div class="offset-xl-2 col-xl-8 text-center">
                <div class="section-title">
                    <h2>Solutions: All Your Questions
                        Answered</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-xl-1 col-xl-10 mt-50">
                <div class="accordion faqs" id="accordionFaq2">
                    <div class="card">
                        <div class="card-header" id="heading5">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapsed active" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse1">
                                    What Is Tax Advisor Services?
                                </button>
                            </h5>
                        </div>

                        <div id="collapse5" class="collapse show" aria-labelledby="heading5" data-parent="#accordionFaq2">
                            <div class="card-body">
                                <div class="content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading6">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse2">
                                    How Many Service We Provide ?
                                </button>
                            </h5>
                        </div>

                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionFaq2">
                            <div class="card-body">
                                <div class="content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading7">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse3">
                                    What Are Your Terms and Conditions?
                                </button>
                            </h5>
                        </div>

                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionFaq2">
                            <div class="card-body">
                                <div class="content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading8">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse2">
                                    What Kinds of Payment Do You Accept?
                                </button>
                            </h5>
                        </div>

                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionFaq2">
                            <div class="card-body">
                                <div class="content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section  -->
    <div class="testimonial-section testimonial-two green-bg section-padding pb-30">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="section-title">
                    <p>Testimonials</p>
                    <h2 class="text-white">A Satisfied Customer Is The Best
                        Business Strategy Of All</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-carousel owl-carousel">
                <div class="single-testimonal-item">
                    <div class="testimonial-img">
                        <img src="assets/img/testimonial/client-6.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-sign">
                            <i class="las la-quote-left"></i>
                        </div>
                        <p class="text-black">Duis aute irure dolor in voluptate velit cillum dolore eu fugiat nulla pariatur. sint occaecat cupidatat non proident, </p>
                        <h5 class="testimonial-title">Shawn Beltran <span>Entrepreneur</span></h5>
                        <div class="testimonal-review-wrap">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                    </div>

                </div>
                <div class="single-testimonal-item">
                    <div class="testimonial-img">
                        <img src="assets/img/testimonial/client-7.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-sign">
                            <i class="las la-quote-left"></i>
                        </div>
                        <p class="text-black">Duis aute irure dolor in voluptate velit cillum dolore eu fugiat nulla pariatur. sint occaecat cupidatat non proident, </p>
                        <h5 class="testimonial-title">Jonatan Rohim <span>Designation</span></h5>
                        <div class="testimonal-review-wrap">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                    </div>

                </div>
                <div class="single-testimonal-item">
                    <div class="testimonial-img">
                        <img src="assets/img/testimonial/client-6.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-sign">
                            <i class="las la-quote-left"></i>
                        </div>
                        <p class="text-black">Duis aute irure dolor in voluptate velit cillum dolore eu fugiat nulla pariatur. sint occaecat cupidatat non proident, </p>
                        <h5 class="testimonial-title">Shawn Beltran <span>Entrepreneur</span></h5>
                        <div class="testimonal-review-wrap">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                    </div>

                </div>
                <div class="single-testimonal-item">
                    <div class="testimonial-img">
                        <img src="assets/img/testimonial/client-7.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-sign">
                            <i class="las la-quote-left"></i>
                        </div>
                        <p class="text-black">Duis aute irure dolor in voluptate velit cillum dolore eu fugiat nulla pariatur. sint occaecat cupidatat non proident, </p>
                        <h5 class="testimonial-title">Jonatan Rohim <span>Designation</span></h5>
                        <div class="testimonal-review-wrap">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                    </div>

                </div>
                <div class="single-testimonal-item">
                    <div class="testimonial-img">
                        <img src="assets/img/testimonial/client-6.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-sign">
                            <i class="las la-quote-left"></i>
                        </div>
                        <p class="text-black">Duis aute irure dolor in voluptate velit cillum dolore eu fugiat nulla pariatur. sint occaecat cupidatat non proident, </p>
                        <h5 class="testimonial-title">Shawn Beltran <span>Entrepreneur</span></h5>
                        <div class="testimonal-review-wrap">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                    </div>

                </div>
                <div class="single-testimonal-item">
                    <div class="testimonial-img">
                        <img src="assets/img/testimonial/client-7.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-sign">
                            <i class="las la-quote-left"></i>
                        </div>
                        <p class="text-black">Duis aute irure dolor in voluptate velit cillum dolore eu fugiat nulla pariatur. sint occaecat cupidatat non proident, </p>
                        <h5 class="testimonial-title">Jonatan Rohim <span>Designation</span></h5>
                        <div class="testimonal-review-wrap">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        .swiper-wrapper {

            transition-timing-function: linear !important
        }
    </style>

    <!-- Client Area  -->
    <div class="pb-120">
        <!-- Slider main container -->
        <div class="client-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="assets/img/client/client-01.jpg" alt="themeforest-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-02.png" alt="codecanyon-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-03.jpg" alt="videohibe-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-04.png" alt="graphicriver-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-05.png" alt="themeforest-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-06.jpg" alt="codecanyon-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-07.jpg" alt="videohibe-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-08.jpg" alt="graphicriver-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-09.jpg" alt="themeforest-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-10.jpg" alt="codecanyon-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-11.png" alt="videohibe-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-12.gif" alt="graphicriver-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-13.gif" alt="graphicriver-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/client-14.gif" alt="graphicriver-logo">
                </div>
            </div>
        </div>
    </div>


    <!-- Faq Section  -->

    <div class="faq-section faq-two dark-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow fadeInDown animated" data-wow-delay="200ms">
                    <div class="section-title">
                        <p>General Questions</p>
                        <h2 class="text-white">Frequently Asked
                            Question.</h2>
                    </div>
                    <div class="accordion faqs" id="accordionFaq">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed active" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What Is Tax Advisor Services?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        How Many Service We Provide ?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        What Are Your Terms and Conditions?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="contact-form-wrap">
                        <div class="contact-form-header">
                            <p>SEND A MESSAGE</p>
                            <h2>Request A Call Back</h2>
                        </div>

                        <div class="contact-form-inner">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="text" placeholder="How can help you?">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message"></textarea>
                                    </div>
                                    <input type="submit" value="Send a Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section  -->

    <div class="contact-section contact-two">
        <div class="container">
            <div class="contact-innner green-bg d-flex align-items-center justify-content-center">
                <div class="text-left">
                    <h3>New to tax advisor services</h3>
                </div>
                <div class="contact-icon">
                    <i class="las la-phone"></i>
                </div>
                <div class="text-right">
                    <h3>Talk to our expert +1 (234) 567 890</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Collaboration Section  -->
    <div class="collaboration-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 text-center">
                    <div class="section-title">
                        <p>Let's Collaboration</p>
                        <h2>This Could Be The Start Of Something
                            Special Let's Work Together!</h2>
                    </div>
                    <a href="contact.php" class="main-btn">Get In Touch</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Collaboration Section  -->
    <div class="collaboration-section section-padding" id="cinstagram">
        <div class="instagram-shape">
            <img src="assets/img/instagram_shape.png" alt="">
        </div>
    </div>


    <style>
        #cinstagram {
            padding: 50px 0px;
        }

        .footer-pad {
            padding-top: 50px;
            background-color: #FCF2E8;
        }
    </style>

    <div class="footer-pad"></div>
    <?php include 'includes/footer.php' ?>
    <?php include 'includes/footer-scripts.php' ?>
</body>



</html>