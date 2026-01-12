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
        $Title = 'Team';
        $MainTitle = 'Interior Designer, Expert Architect';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start wpo-team-section =====-->
        <section class="wpo-team-section-s2 section-padding">
            <div class="container-fluid p-0">
                <div class="team-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="team-card">
                                <div class="image">
                                    <img src="assets/images/team/img-1.jpg" alt="team">
                                    <img src="assets/images/team/img-1.jpg" alt="team">
                                </div>
                                <h2><a href="team-single.php"> <span class="rolling-text">Robert Fox</span></a>
                                </h2>
                                <span>Senior Architect</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="team-card">
                                <div class="image">
                                    <img src="assets/images/team/img-2.jpg" alt="team">
                                    <img src="assets/images/team/img-2.jpg" alt="team">
                                </div>
                                <h2><a href="team-single.php"> <span class="rolling-text">Harry
                                            William</span></a>
                                </h2>
                                <span>Interior Designer</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="team-card">
                                <div class="image">
                                    <img src="assets/images/team/img-3.jpg" alt="team">
                                    <img src="assets/images/team/img-3.jpg" alt="team">
                                </div>
                                <h2><a href="team-single.php"> <span class="rolling-text">Harvard Bunion
                                        </span></a>
                                </h2>
                                <span>Partner & CEO</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="team-card">
                                <div class="image">
                                    <img src="assets/images/team/img-4.jpg" alt="team">
                                    <img src="assets/images/team/img-4.jpg" alt="team">
                                </div>
                                <h2><a href="team-single.php"> <span class="rolling-text">Benzamin
                                            Simon</span></a>
                                </h2>
                                <span>Interior Designer</span>
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