<?php
    include 'includes/header.php';
    $service_id = $_GET['id'];
    $service = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tbl_service WHERE service_id = '$service_id'"));
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title><?= $service['service_name'] ?> | Dev Daadu | INVESTMENT & INSURANCE CONSULTANTS</title>
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

    <div class="breadcrumb-area services section-padding service-top light-bg-1 pb-0">
        <div class="container">
            <div class="row mt-1">
                <div class="col-12">
                    <div class="bread-bg">
                        <img src="http://localhost/DevDaadu/panel/assets/img/<?= $service['service_banner_img'] ?>"
                            alt="">
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
                        <?= $service['service_name'] ?>
                    </h2>
                    <hr>
                </div>
                <div class="service-page-content" ;>
                    <p>
                        <?= $service['service_desc'] ?>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!-- Solution Section  -->

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