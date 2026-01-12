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
        $Title = 'Projects';
        $MainTitle = 'Dream House Residentials';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start wpo-project-section =====-->
        <section class="wpo-project-section section-padding pt-0">
            <div class="container-fulid">
                <div class="project-wrap">
                    <div class="project-card fade_bottom">
                        <img src="assets/images/project/project-1/1.jpg" alt="project-1">
                        <img src="assets/images/project/project-1/1.jpg" alt="project-1">
                        <div class="content">
                            <h2><a href="project-single.php">Modern House In UK</a></h2>
                            <span>Building, Apartment</span>
                        </div>
                    </div>
                    <div class="project-card fade_bottom">
                        <img src="assets/images/project/project-1/2.jpg" alt="project-1">
                        <img src="assets/images/project/project-1/2.jpg" alt="project-1">
                        <div class="content">
                            <h2><a href="project-single.php">Art Museum In Dubai </a></h2>
                            <span>Building, Apartment</span>
                        </div>
                    </div>
                    <div class="project-card fade_bottom">
                        <img src="assets/images/project/project-1/3.jpg" alt="project-1">
                        <img src="assets/images/project/project-1/3.jpg" alt="project-1">
                        <div class="content">
                            <h2><a href="project-single.php">Art Museum In Dubai</a></h2>
                            <span>Building, Apartment</span>
                        </div>
                    </div>
                    <div class="project-card fade_bottom">
                        <img src="assets/images/project/project-1/4.jpg" alt="project-1">
                        <img src="assets/images/project/project-1/4.jpg" alt="project-1">
                        <div class="content">
                            <h2><a href="project-single.php">Modern House In UK</a></h2>
                            <span>Building, Apartment</span>
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