<?php
$query = mysqli_query($conn, "select * from tbl_contact where is_active=1");
$row = mysqli_fetch_array($query);
$contact_address  = $row['contact_address'];
$contact_email  = $row['contact_email'];
$contact_number  = $row['contact_number'];
?>

<div class="footer-area light-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-12 wow fadeInUp animated" data-wow-delay="200ms">
                <div class="footer-widget">
                    <div class="logo">
                        <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>
                    </div>
                    <p class="company-desc">We are DEV DAADU INVESTMENT & INSURANCE CONSULTANTS , we make “Investment” a
                        wise choice by efficient “Tax planning” and building a “Portfolio”, which fulfils your financial
                        goals.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-12 wow fadeInUp animated" data-wow-delay="200ms">
                <div class="footer-widget">
                    <div class="services-list">
                        <h5>Our Services</h5>
                        <ul>

                            <?php
                            $query = mysqli_query($conn, "select * from tbl_service where is_active=1");
                            $totl = mysqli_num_rows($query);
                            if ($totl > 0) {
                                $id = 1;
                                while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <li><i class="las la-check-circle"></i><a
                                    href="service-page.php?id=<?= $row['service_id'] ?>"><?= $row['service_name'] ?></a>
                            </li>

                            <?php $id++;
                                }
                            } else { ?>
                            <div>
                                <p salign="center">No record found</p>
                            </div>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-12 wow fadeInUp animated" data-wow-delay="200ms">
                <div class="footer-widget">
                    <div class="services-list">
                        <h5>Our Products</h5>
                        <ul>
                            <?php
                            $query = mysqli_query($conn, "select * from tbl_products where is_active=1");
                            $totl = mysqli_num_rows($query);
                            if ($totl > 0) {
                                $id = 1;
                                while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <li><i class="las la-check-circle"></i><a
                                    href="products.php?id=<?= $row['products_id'] ?>"><?= $row['products_name'] ?></a>
                            </li>

                            <?php $id++;
                                }
                            } else { ?>
                            <div>
                                <p salign="center">No record found</p>
                            </div>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-12 wow fadeInUp animated" data-wow-delay="200ms">
                <div class="footer-widget">
                    <div class="services-list">
                        <h5>Our Services</h5>
                        <ul>
                            <li><i class="las la-check-circle"></i> <a href="">Financial Health Check</a> </li>
                            <li><i class="las la-check-circle"></i> <a href="">Financial Fact Finder</a> </li>
                            <li><i class="las la-check-circle"></i> <a href="">Goal Based Planning</a> </li>
                        </ul>
                    </div>
                    <br>
                    <div class="support-info">
                        <div class="support-icon">
                            <i class="las la-phone-volume"></i>
                        </div>
                        <div class="support-content">
                            <h6>Free Support</h6>
                            <p><?= $contact_number ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="footer-navbar">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Botoom Area  -->

<div class="footer-bottom yellow-bg">
    <p>&copy; Copyright 2024. All Rights Reserved | DevDaadu.com</p>
</div>

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<div class="appointment-btn">
    <a href="contact.php" class="btn my-btn">
        Get Appointment
    </a>
</div>

<div class="whatsapp-footer">
    <a href="https://wa.me/+919896570700"><i class="fab fa-whatsapp"></i></a>
</div>

<style>
.whatsapp-footer {
    position: fixed;
    bottom: 140px;
    right: 5px;
    background-color: #25d366;
    border-radius: 50%;
    width: 50px;
    z-index: 99999;
    height: 50px;
}

.whatsapp-footer i {
    /* color: #25d366; */
    color: white;
    font-size: 40px;
    padding: 5px 8px;
}
</style>