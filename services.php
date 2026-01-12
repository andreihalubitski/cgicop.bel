<!DOCTYPE html>
<html lang="en">
<?php include './partials/head.php' ?>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <?php include './partials/preloader.php' ?>
        <!-- end preloader -->

        <!--  cursor style -->
        <div class="cursor"></div>
        <div class="cursor2"></div>

        <!-- Start header -->
        <header id="header">
            <?php
            $HeaderStyle = 'wpo-header-style-s11';
            ?>
            <?php include './partials/header-topbar-s2.php' ?>
            <?php include './partials/header-six.php' ?>
        </header>
        <!-- end of header -->

        <!-- start wpo-page-title -->
        <?php
        $Title = 'Services';
        $MainTitle = 'What’s part of the service';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start wpo-service-section =====-->
        <section class="wpo-service-section-s8 section-padding">
            <div class="container-fluid p-0">
                <div class="service-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="assets/images/service/icon/buildings1.svg" alt="icon">
                                </div>
                                <h2><a href="service-single.php">Custom Solutions</a></h2>
                                <p>Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero
                                    dapibus.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="assets/images/service/icon/dining-room1.svg" alt="icon">
                                </div>
                                <h2><a href="service-single.php">Furniture & Decor</a></h2>
                                <p>Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero
                                    dapibus.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="assets/images/service/icon/living-room1.svg" alt="icon">
                                </div>
                                <h2><a href="service-single.php">Interior Design</a></h2>
                                <p>Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero
                                    dapibus.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="assets/images/service/icon/planning1.svg" alt="icon">
                                </div>
                                <h2><a href="service-single.php">Design & Planning</a></h2>
                                <p>Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero
                                    dapibus.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="assets/images/service/icon-4/contractor.svg" alt="icon">
                                </div>
                                <h2><a href="service-single.php">House Renovation</a></h2>
                                <p>Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero
                                    dapibus.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="assets/images/service/icon-4/engineering.svg" alt="icon">
                                </div>
                                <h2><a href="service-single.php">General Contractor</a></h2>
                                <p>Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero
                                    dapibus.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="assets/images/service/icon-4/excavator.svg" alt="icon">
                                </div>
                                <h2><a href="service-single.php">Industrial Engineering</a></h2>
                                <p>Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero
                                    dapibus.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="assets/images/service/icon-4/property.svg" alt="icon">
                                </div>
                                <h2><a href="service-single.php">City Landmarks</a></h2>
                                <p>Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero
                                    dapibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===== start wpo-partners-section =====-->
        <section class="wpo-partners-section fade_bottom">
            <h2 class="d-none">No Content</h2>
            <ul class="partners-slider">
                <li>
                    <div>
                        <img src="assets/images/partners/1.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/images/partners/2.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/images/partners/3.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/images/partners/4.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/images/partners/5.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/images/partners/2.png" alt="">
                    </div>
                </li>
            </ul>
        </section>


        <!-- start wpo-site-footer -->
        <?php include './partials/footer.php' ?>
        <!-- end wpo-site-footer -->

    </div>
    <!-- end of page-wrapper -->
    <?php include './partials/script.php' ?>
</body>

</html>