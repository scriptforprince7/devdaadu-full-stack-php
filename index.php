<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Dev Daadu | INVESTMENT & INSURANCE CONSULTANTS</title>
    <?php include 'includes/head.php' ?>
</head>

<body class="white-bg">

    <?php include 'includes/header.php' ?>
    <!-- Hero Area  -->

    <div class="hero-area hero-area-two">
        <div class="homepage-slides owl-carousel">

            <?php
            $query = mysqli_query($conn, "select * from tbl_slider where is_active=1");
            $totl = mysqli_num_rows($query);
            if ($totl > 0) {
                $id = 1;
                while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="single-slide-item">
                <div class="slider-bg bg-cover"
                    data-background="<?= BASE_URL . 'assets/img/' . $row['slider_img'] . '' ?>">
                    <div class="overlay-2-disabled"></div>
                    <div class="container">
                        <div class="hero-area-content">
                            <h3 class="text-center" style="display: block;">
                                <?= $row['slider_prehead'] ?>
                            </h3>
                            <h1 class="text-center">
                                <?= $row['slider_mainhead'] ?>
                            </h1>
                        </div>
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

    <!-- Feature Section  -->

    <div class="feature-section section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <?php
                    $query = mysqli_query($conn, "select * from tbl_about where is_active=1");
                    $totl = mysqli_num_rows($query);
                    if ($totl > 0) {
                        $id = 1;
                        while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="section-title">
                        <h2>
                            <?= $row['about_heading'] ?>
                        </h2>
                    </div>
                    <p>
                        <?= $row['about_desc'] ?>
                    </p>

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
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span
                                            class="value">72,303.85</span><br><span class=""><img
                                                src="https://my-eoffice.com/img/down.png"> -106.53 (-0.15%) </span>
                                    </td>
                                    <td width="1%">GOLD
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span
                                            class="value">63346.00</span><br><span class=""><img
                                                src="https://my-eoffice.com/img/down.png"> -43.00 (-0.07%) </span>
                                    </td>
                                    <td width="1%">SILVER
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span
                                            class="value">74404.00</span><br><span class=""><img
                                                src="https://my-eoffice.com/img/down.png"> -555.00 (-0.74%) </span>
                                    </td>
                                    <td width="1%">Crude
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span
                                            class="value">6003.00</span><br><span class=""><img
                                                src="https://my-eoffice.com/img/down.png"> -45.00 (-0.74%) </span>
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
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span
                                            class="value">83.157</span><br><span class=""><img
                                                src="https://my-eoffice.com/img/down.png"> -0.039 (-0.05%) </span>
                                    </td>
                                    <td width="1%">EURO
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span
                                            class="value">92.0940</span><br><span class=""><img
                                                src="https://my-eoffice.com/img/up.png"> +0.1235 (+0.13%) </span>
                                    </td>
                                    <td width="1%">UK
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span
                                            class="value">106.166</span><br><span class=""><img
                                                src="https://my-eoffice.com/img/up.png"> +0.267 (+0.25%) </span>
                                    </td>
                                    <td width="1%">YEN
                                        <hr style="background-color:#1b509e; height:1px; border:none;"><span
                                            class="value">58.8777</span><br><span class=""><img
                                                src="https://my-eoffice.com/img/up.png"> +0.0761 +0.13% </span>
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
                                    <a href="https://www.karvykra.com/UPanSearchGlobalWithPanExempt.aspx"
                                        class="main-btn">
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
                                    Do it yourself; digital KYC
                                </h4>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks</p>

                                <div class="btn-container">
                                    <a href="https://www.camsonline.com/Investors/Transactions/KYC/Paper-less-KYC"
                                        class="main-btn">
                                        Digital KYC
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
                        <h2>Your Success,<br> Our <b><span style="color:#056251;">Six Essential Services</span></b> for
                            Excellence.</h2>
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
                    <p class="text-white">Unlock the door to a brighter future! Our mission is to empower individuals
                        like you to make positive changes in your lives. There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
                        randomised words look even slightly believable. If you are going to use a passage</p>
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


                    <?php
                    $query = mysqli_query($conn, "select * from tbl_faq where is_active=1");
                    $totl = mysqli_num_rows($query);
                    if ($totl > 0) {
                        $id = 1;
                        while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="card">
                        <div class="card-header" id="heading5">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapsed active" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse1">
                                    <?= $row['faq_question'] ?>
                                </button>
                            </h5>
                        </div>

                        <div id="collapse5" class="collapse show" aria-labelledby="heading5"
                            data-parent="#accordionFaq2">
                            <div class="card-body">
                                <div class="content">
                                    <p>
                                        <?= $row['faq_answer'] ?>
                                    </p>
                                </div>
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
                                    <button class="btn btn-link collapsed active" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true"
                                        aria-controls="collapse1">
                                        What is the purpose of the Contact Form?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>The Contact Form is a convenient way for you to get in touch with us. Whether
                                            you have questions, need assistance, or want to provide feedback, simply
                                            fill out the form, and we'll get back to you as soon as possible.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        How quickly can I expect a response?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>We strive to respond to Contact Form submissions promptly. Typically, you can
                                            expect to hear back from us within 24-48 hours. If your inquiry is
                                            time-sensitive, please indicate that in the form, and we'll prioritize
                                            accordingly.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Can I use this Form for business inquiries?
                                    </button>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>Absolutely! The Contact Form is designed to accommodate various inquiries,
                                            including business-related ones. If you have partnership proposals,
                                            collaboration ideas, or any other business-related matters, feel free to use
                                            the form, and we'll be in touch.
                                        </p>
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
                            <form action="process_form.php" method="post">
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
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            placeholder="Your message"></textarea>
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
                    <h3>New to financial consultant service</h3>
                </div>
                <div class="contact-icon">
                    <i class="las la-phone"></i>
                </div>
                <div class="text-right">
                    <h3>Talk to our expert 91-9896570700</h3>
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