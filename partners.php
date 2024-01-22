<?php
    include 'includes/header.php';
    $query = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tbl_partners WHERE is_active=1"));
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Dev Daadu - Financial Consultant</title>
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
                        <img src="http://localhost/DevDaadu/panel/assets/img/<?= $query['partner_img'] ?>" alt="">
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
                        OUR DEALING PARTNERS
                    </h2>
                    <hr>
                </div>
                <div class="service-page-content" ;>
                    <p>
                        <?= $query['partner_desc'] ?>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!-- Solution Section  -->



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