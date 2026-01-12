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
         <?php
        $HeaderStyle = 'wpo-header-style';
        ?>
        <?php include './partials/header.php' ?>
        <!-- end of header -->

        <!--===== start wpo-hero-slider =====-->
        <section class="wpo-hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-1.jpg">
                            <div class="container">
                                <div class="slide-content">
                                    <div data-swiper-parallax="400" class="slide-sub-title">
                                        <h2>Innovation in Every Line, Strength <span><img
                                                    src="assets/images/slider/hero-text.jpg" alt=""></span> in Every
                                            Build</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-2.jpg">
                            <div class="container">
                                <div class="slide-content">
                                    <div data-swiper-parallax="400" class="slide-sub-title">
                                        <h2>Innovation in Every Line, Strength <span><img
                                                    src="assets/images/slider/hero-text.jpg" alt=""></span> in Every
                                            Build</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="hero-team">
                <ul>
                    <li><img src="assets/images/team/hero-team/1.jpg" alt="hero-team"></li>
                    <li><img src="assets/images/team/hero-team/2.jpg" alt="hero-team"></li>
                    <li><img src="assets/images/team/hero-team/3.jpg" alt="hero-team"></li>
                    <li><img src="assets/images/team/hero-team/4.jpg" alt="hero-team"></li>
                    <li>
                        <a href="#">
                            <svg width="32" height="8" viewBox="0 0 32 8" fill="none">
                                <rect width="8" height="8" rx="4" fill="white" />
                                <rect x="12" width="8" height="8" rx="4" fill="white" />
                                <rect x="24" width="8" height="8" rx="4" fill="white" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <span>Meet Our Team</span>
            </div>

            <a href="#about" class="scroll-btn">
                <span>Scroll For More</span>
                <div class="scroll-befor">
                    <img src="assets/images/down-arrow.svg" alt="">
                </div>
            </a>
        </section>

        <!--===== start wpo-about-section =====-->
        <section id="about" class="wpo-about-section section-padding pb-0">
            <div class="about-wrap">
                <div class="content">
                    <h2 class="poort-text poort-in-right">About Bliize</h2>
                    <p class="fade_bottom">Blaze is a trailblazing architecture agency renowned for its innovative
                        approach to design, where
                        creativity meets functionality. From futuristic skyscrapers to timeless cultural landmarks, We
                        specializes in crafting spaces that inspire and endure. Blaze pushes boundaries, transforming
                        bold concepts into architectural masterpieces. Every project reflects a commitment to
                        eco-conscious practices and sustainable solutions. Blaze believes architecture is personal.</p>
                    <div class="about-btn fade_bottom">
                        <a href="about.php" class="theme-btn"> <span class="rolling-text">Discover More</span> </a>
                        <div class="video-wrap">
                            <div class="video-holder">
                                <a href="https://www.youtube.com/embed/uySn1BZiWWs?si=XcM3FYqzlXkJaB0v"
                                    class="video-btn" data-type="iframe">
                                    <svg width="24" height="27" viewBox="0 0 24 27" fill="none">
                                        <path
                                            d="M22.25 15.665L4.99999 25.6243C3.33333 26.5865 1.25 25.3837 1.25 23.4592L1.25 3.54063C1.25 1.61613 3.33333 0.413319 5 1.37557L22.25 11.3349C23.9167 12.2971 23.9167 14.7027 22.25 15.665Z"
                                            stroke="black" />
                                    </svg>
                                </a>
                            </div>
                            <span>Watch Videos</span>
                        </div>
                    </div>
                    <div class="about-funfact fade_bottom">
                        <h3><span class="odometer" data-count="23">00</span> <span class="icon">+</span></h3>
                        <h4>Years Of <br>
                            Experience</h4>
                    </div>
                </div>
            </div>
            <div class="image">
                <div class="image-1  poort-in-right">
                    <img src="assets/images/about/about-1/1.jpg" alt="">
                </div>
                <div class="image-2 poort-in-right">
                    <img src="assets/images/about/about-1/2.jpg" alt="">
                </div>
            </div>
        </section>

        <!--===== start wpo-project-section =====-->
        <section class="wpo-project-section section-padding">
            <div class="container-fulid">
                <div class="title">
                    <h2 class="poort-text poort-in-right">Our Works</h2>
                </div>
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
                <div class="project-allBtn fade_bottom">
                    <a href="projects.php" class="theme-btn"><span class="rolling-text">See All Projects</span> <img
                            src="assets/images/right-arrow-2.svg" alt=""></a>
                </div>
            </div>
        </section>

        <!--===== start wpo-service-section =====-->
        <section class="wpo-service-section">
            <div class="container-fluid p-0">
                <div class="service-top">
                    <div class="image">
                        <img src="assets/images/service/service-bg.jpg" alt="service-bg">
                    </div>
                    <div class="content">
                        <h2 class="poort-text poort-in-right">Creating Landmark Spaces, One Blueprint at a Time</h2>
                        <p class="fade_bottom">Cras nisl nibh commodo ullamcorper aliquet. Gravida orci laoreet eros
                            platea curabitur
                            scelerisque quis cras scelerisque. Fermentum mus et viverra purus nibh fusce integer. Aenean
                            cursus quis pharetra vitae vel sit ac malesuada. </p>
                    </div>
                </div>
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
                    </div>
                </div>
            </div>
        </section>

        <!--===== start wpo-funfact-section =====-->
        <section class="wpo-funfact-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="item">
                            <h2><span class="odometer" data-count="215">00</span> <span class="icon">+</span></h2>
                            <h3>CURRENT CLIENTS</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="item">
                            <h2><span class="odometer" data-count="550">00</span> <span class="icon">+</span></h2>
                            <h3>PROJECTS COMPLETE</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="item">
                            <h2><span class="odometer" data-count="23">00</span> <span class="icon">+</span></h2>
                            <h3>YEARS OF EXPERIENCE</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="item">
                            <h2><span class="odometer" data-count="25">00</span> <span class="icon">+</span></h2>
                            <h3>OFFICES WORLDWIDE</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===== start wpo-testimonial-section =====-->
        <section class="wpo-testimonial-section">
            <div class="testimonial-slider owl-carousel">
                <div class="item">
                    <div class="bg-image">
                        <img src="assets/images/testimonial/img-1.jpg" alt="testimonial">
                    </div>
                    <div class="content fade_bottom">
                        <div class="icon">
                            <img src="assets/images/testimonial/quote.svg" alt="quote">
                        </div>
                        <h3>Ac sollicitudin euismod ut luctus felis lacus sed pellentesque. Purus eget consectur massa
                            amet. Hac diam suspendisse faucibus posuere dignissim magna condimentum tristique. </h3>
                        <h4>Leslie Alexander</h4>
                        <span>Marketing Coordinator</span>
                    </div>
                </div>
                <div class="item">
                    <div class="bg-image">
                        <img src="assets/images/testimonial/img-2.jpg" alt="testimonial">
                    </div>
                    <div class="content fade_bottom">
                        <div class="icon">
                            <img src="assets/images/testimonial/quote.svg" alt="quote">
                        </div>
                        <h3>Ac sollicitudin euismod ut luctus felis lacus sed pellentesque. Purus eget consectur massa
                            amet. Hac diam suspendisse faucibus posuere dignissim magna condimentum tristique. </h3>
                        <h4>Sarah Krause</h4>
                        <span>Marketing Coordinator</span>
                    </div>
                </div>
                <div class="item">
                    <div class="bg-image">
                        <img src="assets/images/testimonial/img-3.jpg" alt="testimonial">
                    </div>
                    <div class="content fade_bottom">
                        <div class="icon">
                            <img src="assets/images/testimonial/quote.svg" alt="quote">
                        </div>
                        <h3>Ac sollicitudin euismod ut luctus felis lacus sed pellentesque. Purus eget consectur massa
                            amet. Hac diam suspendisse faucibus posuere dignissim magna condimentum tristique. </h3>
                        <h4>Lavonne Smith</h4>
                        <span>Marketing Coordinator</span>
                    </div>
                </div>
            </div>
        </section>

        <!--===== start wpo-team-section =====-->
        <section class="wpo-team-section">
            <div class="container-fluid">
                <div class="title">
                    <h2 class="poort-text poort-in-right">Our Team</h2>
                </div>
                <div class="team-slider owl-carousel">
                    <div class="col">
                        <div class="team-card">
                            <div class="image">
                                <img src="assets/images/team/1.jpg" alt="team">
                                <img src="assets/images/team/1.jpg" alt="team">
                            </div>
                            <h2><a href="team-single.php"> <span class="rolling-text">Robert Fox</span></a></h2>
                            <span>Senior Architect </span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-card">
                            <div class="image">
                                <img src="assets/images/team/2.jpg" alt="team">
                                <img src="assets/images/team/2.jpg" alt="team">
                            </div>
                            <h2><a href="team-single.php"> <span class="rolling-text">Harvard Bunion </span></a></h2>
                            <span>Partner & CEO</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-card">
                            <div class="image">
                                <img src="assets/images/team/3.jpg" alt="team">
                                <img src="assets/images/team/3.jpg" alt="team">
                            </div>
                            <h2><a href="team-single.php"> <span class="rolling-text">Benzamin Simon</span></a></h2>
                            <span>Interior Designer</span>
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