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
        $Title = 'Pricing';
        $MainTitle = 'Choose Your Perfect Plan';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start wpo-pricing-section =====-->
        <div class="wpo-pricing-section section-padding pt-0">
            <div class="container-fluid">
                <div class="section-title splittext-line">
                    <p>Fermentum mus et viverra purus nibh fusce integer. Aenean cursus quis pharetra vitae vel sit ac
                        malesuada. </p>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 fade_bottom">
                        <div class="pricing-card">
                            <div class="title">
                                <h2>Basic</h2>
                            </div>
                            <div class="pricing-top">
                                <h2>$125<sub> / Per Month</sub></h2>
                            </div>
                            <ul>
                                <li>
                                    Dismantling plan
                                </li>
                                <li>
                                    Measurement of the room
                                </li>
                                <li>
                                    Structure of a project
                                </li>
                                <li>
                                    Scheme of interior finishing
                                </li>
                                <li>
                                    3D-Visualization of premises
                                </li>
                                <li>
                                    Best interior design
                                </li>
                            </ul>
                            <a href="#" class="theme-btn">
                                <span class="rolling-text">Choose Plan</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4  col-lg-4 col-md-6 fade_bottom">
                        <div class="pricing-card active">
                            <div class="title">
                                <h2>Standard</h2>
                            </div>
                            <div class="pricing-top">
                                <h2>$150<sub> / Per Month</sub></h2>
                            </div>
                            <ul>
                                <li>
                                    Dismantling plan
                                </li>
                                <li>
                                    Measurement of the room
                                </li>
                                <li>
                                    Structure of a project
                                </li>
                                <li>
                                    Scheme of interior finishing
                                </li>
                                <li>
                                    3D-Visualization of premises
                                </li>
                                <li>
                                    Best interior design
                                </li>
                            </ul>
                            <a href="#" class="theme-btn">
                                <span class="rolling-text">Choose Plan</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 fade_bottom">
                        <div class="pricing-card">
                            <div class="title">
                                <h2>Platinum</h2>
                            </div>
                            <div class="pricing-top">
                                <h2>$320<sub> / Per Month</sub></h2>
                            </div>
                            <ul>
                                <li>
                                    Dismantling plan
                                </li>
                                <li>
                                    Measurement of the room
                                </li>
                                <li>
                                    Structure of a project
                                </li>
                                <li>
                                    Scheme of interior finishing
                                </li>
                                <li>
                                    3D-Visualization of premises
                                </li>
                                <li>
                                    Best interior design
                                </li>
                            </ul>
                            <a href="#" class="theme-btn">
                                <span class="rolling-text">Choose Plan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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