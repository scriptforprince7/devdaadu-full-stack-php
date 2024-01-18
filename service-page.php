<?php include 'panel/db/config.php';

$service_id = $_GET['id'];
$service = 
mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tbl_service WHERE service_id = '$service_id'")) 
; 






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title><?=$service['service_name']?> | Dev Daadu - Financial Consultant</title>
    <?php include 'includes/head.php' ?>

    <style>
        .section-padding.service-top {
            padding: 40px 0px;
        }

        .swiper-wrapper {

            transition-timing-function: linear !important
        }
    </style>
</head>

<body class="white-bg">

    <?php include 'includes/header.php' ?>

            <div class="breadcrumb-area services section-padding service-top light-bg-1 pb-0">
                <div class="container">
                    <div class="row mt-1">
                        <div class="col-12">
                            <div class="bread-bg">
                                <img src="http://localhost/DevDaadu/panel/assets/img/<?=$service['service_banner_img']?>" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Service Page  -->


            <style>
                .service-heading {
                    padding: 50px 0px 10px 0px;

                }

                h2.service-heading {
                    font-family: 'Bebas Neue', sans-serif !important;
                    font-size: 74px;
                    color: #056251;
                }

                .service-page-content {
                    margin-top: 10px;
                }
            </style>
            <div class="service-page pb-60">
                <div class="container">

                    <div class="col-xl-12">
                        <div class="section-title">
                            <h2 class="text-center service-heading">
                                <?=$service['service_name']?>
                            </h2>
                            <hr>
                        </div>
                        <div class="service-page-content" ;>
                            <p>
                            <?=$service['service_desc']?>
                            </p>

                            <div class="video-section" data-background="http://localhost/DevDaadu/panel/assets/img/<?=$service['service_bottom_img']?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solution Section  -->

            <div class="solution-section pb-0">
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
                        <div class="accordion faqs" id="accordionFaq">
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed active" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                            What Is Tax Advisor Services?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
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
                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse2">
                                            What Kinds of Payment Do You Accept?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionFaq">
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


    <!-- Client Area  -->
    <div class="pb-60 pt-60">
        <hr>
        <!-- Slider main container -->
        <div class="client-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="assets/img/client/themeforest.png" alt="themeforest-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/codecanyon.png" alt="codecanyon-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/videohive.png" alt="videohibe-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/graphicriver.png" alt="graphicriver-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/themeforest.png" alt="themeforest-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/codecanyon.png" alt="codecanyon-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/videohive.png" alt="videohibe-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/graphicriver.png" alt="graphicriver-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/themeforest.png" alt="themeforest-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/codecanyon.png" alt="codecanyon-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/videohive.png" alt="videohibe-logo">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/client/graphicriver.png" alt="graphicriver-logo">
                </div>
            </div>
        </div>
    </div>

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




    <?php include 'includes/footer.php' ?>
    <?php include 'includes/footer-scripts.php' ?>

</body>


</html>