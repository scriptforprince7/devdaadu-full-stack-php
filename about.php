<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>About Us | Dev Daadu | INVESTMENT & INSURANCE CONSULTANTS</title>
    <?php include 'includes/head.php' ?>

</head>

<body class="white-bg">

    <?php include 'includes/header.php' ?>

    <!-- Feature Section  -->

    <div class="feature-section section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="section-title">
                        <?php
                        $query = mysqli_query($conn, "select * from tbl_about where is_active=1");
                        $totl = mysqli_num_rows($query);
                        if ($totl > 0) {
                            $id = 1;
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <h2>
                            <?= $row['about_heading'] ?>
                        </h2>
                        <?php $id++;
                            }
                        } else { ?>
                        <div>
                            <p salign="center"></p>
                        </div>
                        <?php } ?>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis accusamus deserunt at
                            placeat id explicabo tempore, cupiditate suscipit perferendis ab ex odit. Sapiente
                            aspernatur debitis maiores modi aliquam sint voluptates!</span>
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
                            <h4>Financial Planning</h4>
                            <p>A financial plan is the road map for your financial life.</p>
                            <div class="btn-container text-center">
                                <a href="service-page.php?id=13" class="main-btn">
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
                            <h4>Tax Planning</h4>
                            <p>Tax planning is not a device to reduce tax burden.</p>
                            <div class="btn-container text-center">
                                <a href="service-page.php?id=14" class="main-btn">
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
                            <h4>Wealth Planning</h4>
                            <p>We all have objectives we want to achieve in life.</p>
                            <div class="btn-container text-center">
                                <a href="service-page.php?id=15" class="main-btn">
                                    Go Check
                                </a>
                            </div>
                        </div>
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
                            <h4>Child Future Planning</h4>
                            <p>
                                All parents dream of fulfilling all the requirements and desires of their kids.</p>
                            <div class="btn-container text-center">
                                <a href="service-page.php?id=16" class="main-btn">
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
                            <h4>Retirement Planning</h4>
                            <p>With retirement not far around the corner, your needs will be changing.</p>
                            <div class="btn-container text-center">
                                <a href="service-page.php?id=17" class="main-btn">
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
                            <h4>Loans</h4>
                            <p>Life is full of unexpected expenses. Go for loan instead. </p>
                            <div class="btn-container text-center">
                                <a href="service-page.php?id=19" class="main-btn">
                                    Go Check
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Why Choose Us  -->
    <div class="choose-us-section section-padding light-bg-1 mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 text-center">
                    <div class="section-title">
                        <p>WHY CHOOSE US</p>
                        <h2>Comprehensive Financial Services for Your Success</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-xl-4 col-lg-3 col-md-6 col-12">
                    <div class="single-feature-item mt-60">
                        <div class="feature-icon">
                            <i class="flaticon-goal"></i>
                        </div>
                        <div class="feature-title">
                            <a href="products.php?id=1">
                                <h4>Mutual Fund</h4>
                            </a>
                        </div>
                        <p class="text-black">Many desktop packages and web page editors now use Lorem</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-12">
                    <div class="single-feature-item">
                        <div class="feature-icon">
                            <i class="flaticon-group"></i>
                        </div>
                        <div class="feature-title">
                            <a href="products.php?id=3">
                                <h4>Insurance</h4>
                            </a>
                        </div>
                        <p class="text-black">Many desktop packages and web page editors now use Lorem</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-12">
                    <div class="single-feature-item mt-60">
                        <div class="feature-icon">
                            <i class="flaticon-innovation"></i>
                        </div>
                        <div class="feature-title">
                            <a href="products.php?id=4">
                                <h4>Fixed Deposit</h4>
                            </a>
                        </div>
                        <p class="text-black">Many desktop packages and web page editors now use Lorem</p>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single-feature-item mt-60">
                        <div class="feature-icon">
                            <i class="flaticon-goal"></i>
                        </div>
                        <div class="feature-title">
                            <a href="products.php?id=5">
                                <h4>Real Estate</h4>
                            </a>
                        </div>
                        <p class="text-black">Many desktop packages and web page editors now use Lorem</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single-feature-item">
                        <div class="feature-icon">
                            <i class="flaticon-group"></i>
                        </div>
                        <div class="feature-title">
                            <a href="products.php?id=6">
                                <h4>NRI Corner</h4>
                            </a>
                        </div>
                        <p class="text-black">Many desktop packages and web page editors now use Lorem</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single-feature-item mt-60">
                        <div class="feature-icon">
                            <i class="flaticon-goal"></i>
                        </div>
                        <div class="feature-title">
                            <a href="products.php?id=7">
                                <h4>NRI Taxation</h4>
                            </a>
                        </div>
                        <p class="text-black">Many desktop packages and web page editors now use Lorem</p>
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


                <?php
                $query = mysqli_query($conn, "select * from tbl_testimonials where is_active=1");
                $totl = mysqli_num_rows($query);
                if ($totl > 0) {
                    $id = 1;
                    while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="single-testimonal-item">
                    <div class="testimonial-content">
                        <div class="quote-sign">
                            <i class="las la-quote-left"></i>
                        </div>
                        <p class="text-black">
                            <?= $row['testimonials_content'] ?>
                        </p>
                        <h5 class="testimonial-title"><?= $row['testimonials_name'] ?><span>Entrepreneur</span></h5>
                        <div class="testimonal-review-wrap">
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                            <i class="las la-star"></i>
                        </div>
                    </div>
                </div>
                <?php $id++;
                    }
                } else { ?>
                <div>
                    <p salign="center"></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <style>
    .swiper-wrapper {

        transition-timing-function: linear !important
    }
    </style>

    <!-- Client Area  -->
    <div class="pb-20">
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

    <style>
    #cinstagram {
        padding: 50px 0px;
    }

    .footer-pad {
        padding-top: 50px;
        background-color: #FCF2E8;
    }
    </style>

    <!-- Contact Section  -->
    <div class="contact-area section-padding pt-0">
        <div class="container">
            <div class="contact-section-inner dark-bg">
                <div class="contact-section-content">
                    <h2 class="text-white">Want to work with us?</h2>
                    <h5 class="text-white">Meet our people. See our work. Join our team.</h5>
                    <a href="contact.php" class="main-btn">Contact With Us</a>
                </div>
            </div>
        </div>

    </div>


    <div class="footer-pad"></div>

    <!-- Footer Area  -->
    <?php include 'includes/footer.php' ?>
    <?php include 'includes/footer-scripts.php' ?>


</body>



</html>