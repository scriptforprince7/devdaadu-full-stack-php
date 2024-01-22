<?php include 'panel/db/config.php'; ?>
<!-- Mouse Cursor  -->
<!-- <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div> -->

<!-- Pre-Loader -->
<!-- <div class="preloader"></div> -->

<!-- Header Top Area -->

<!-- Header Area -->



<div class="header-area header-two">
    <div class="sticky-area">
        <div class="navigation">
            <div class="container-fluid">
                <div class="header-inner-box">
                    <div class="logo">
                        <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>
                    </div>

                    <div class="main-menu">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <style>
                            .nav-2row {
                                display: flex;
                                flex-direction: column;
                            }
                            </style>
                            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                <ul>
                                    <li><a href="tel:+91-9896570700"><span class="circle-small-btn"><i
                                                    class="las la-phone"></i></span>+91 98965 70700</a></li>
                                    <li><a href="mailto:dinesharora@gmail.com"><span class="circle-small-btn"><i
                                                    class="las la-envelope"></i></span>dinesharora@gmail.com</a></li>
                                    <span style=margin-left:20px>
                                        <a href="https://www.njindiaonline.in/mclientdesk/login.fin"
                                            class="main-btn header-btn">Login Portfolio</a>
                                    </span>
                                </ul>

                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About Us
                                            <span class="sub-nav-toggler"> </span>
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <ul class="sub-menu">

                                            <li><a href="about.php">Know About Us</a></li>
                                            <li><a href="partners.php">Our Partners</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Services
                                            <span class="sub-nav-toggler"> </span>
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <?php
                                            $query = mysqli_query($conn, "select * from tbl_service where is_active=1");
                                            $totl = mysqli_num_rows($query);
                                            if ($totl > 0) {
                                                $id = 1;
                                                while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <li><a
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
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Products
                                            <span class="sub-nav-toggler"> </span>
                                            <i class="fas fa-caret-down"></i>
                                        </a>

                                        <ul class="sub-menu">
                                            <?php
                                            $query = mysqli_query($conn, "select * from tbl_products where is_active=1");
                                            $totl = mysqli_num_rows($query);
                                            if ($totl > 0) {
                                                $id = 1;
                                                while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <li><a
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
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Financial Tools
                                            <span class="sub-nav-toggler"> </span>
                                            <i class="fas fa-caret-down"></i>
                                        </a>


                                        <ul class="sub-menu">
                                            <li>
                                                <a href="">Financial Health Check</a>
                                            </li>
                                            <li>
                                                <a href="">Financial Fact Finder</a>
                                            </li>
                                            <li>
                                                <a href="">Goal Based Planning</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php"
                                            style="font-size: 17px; color:#056251"><u>Online Appointment</u></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- social media sidebar -->
<div id="social-sidebar" class="sidebar-fixed">
    <aside class="sidebar-content">
        <div class="side-social-icons">


            <?php
            $query = mysqli_query($conn, "select * from tbl_sm where is_active=1");
            $totl = mysqli_num_rows($query);
            if ($totl > 0) {
                $id = 1;
                while ($row = mysqli_fetch_array($query)) {
            ?>


            <div href="<?=$row['sm_link']?>" class="<?=$row['sm_name']?>">
                <a href="<?=$row['sm_link']?>"><i class="fab fa-<?=$row['sm_name']?>"></i><?=$row['sm_name']?></a>
            </div>


            <!-- <div href="#" class="twitter">
                        <a href=""><i class="fa-brands fa-x-twitter"></i>Twitter</a>
                    </div>
                    <div href="#" class="linkedin">
                        <a href=""><i class="fab fa-linkedin"></i>LinkedIn</a>
                    </div>
                    <div href="#" class="whatsapp">
                        <a href=""><i class="fab fa-whatsapp"></i>WhatsApp</a>
                    </div>
                    <div href="#" class="instagram">
                        <a href=""><i class="fab fa-instagram"></i>Instagram</a>
                    </div>
                    <div href="#" class="youtube">
                        <a href=""><i class="fab fa-youtube"></i>YouTube</a>
                    </div> -->



            <?php $id++;
                }
            } else { ?>
            <div>
                <p salign="center">No record found</p>
            </div>
            <?php } ?>




        </div>
    </aside>
</div>

<style>

</style>

<style>
.box-3 {
    background-color: #66A182;
}

.btn {
    line-height: 50px;
    height: 50px;
    text-align: center;
    width: 250px;
    cursor: pointer;
}

.btn-three {
    color: #FFF;
    transition: all 0.5s;
    position: relative;
}

.btn-three::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    background-color: rgba(255, 255, 255, 0.1);
    transition: all 0.3s;
}

.btn-three:hover::before {
    opacity: 0;
    transform: scale(0.5, 0.5);
}

.btn-three::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0;
    transition: all 0.3s;
    border: 1px solid rgba(255, 255, 255, 0.5);
    transform: scale(1.2, 1.2);
}

.btn-three:hover::after {
    opacity: 1;
    transform: scale(1, 1);
}
</style>