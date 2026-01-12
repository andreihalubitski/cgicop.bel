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

        <!--===== start wpo-hero-slider =====-->
        <section class="wpo-hero-static-s15">
            <div class="content">
                <h2 class="splittext-line">MODERN</h2>
                <h2 class="text-bottom splittext-line">DESIGN</h2>
                <p class="fade_bottom">Hi I Am <span>Robert Jonson</span>. A Creative <span>Interior
                        Designer</span>. Welcome to
                    My world of
                    imagination and boundless creativity. Together, let's embark on a remarkable journey where
                    dreams become realities.</p>
                <a href="about.php" class="theme-btn fade_bottom">Explore Our Work</a>
            </div>
            <div class="hero-right">
                <img src="assets/images/slider/slide-15.jpg" alt="">
            </div>
        </section>

        <!--===== start wpo-partners-section =====-->
        <section class="wpo-partners-section fade_bottom ">
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

        <!--===== start wpo-about-section-s15 =====-->
        <section class="wpo-about-section-s15 section-padding">
            <div class="wraper">
                <div class="about-left">
                    <img src="assets/images/about/about-9/1.jpg" alt="">
                </div>
                <div class="about-right">
                    <div class="content">
                        <h3>About Me</h3>
                        <h2 class="poort-text poort-in-right">I Am Designing Spaces You'll Love Coming Home To</h2>
                        <p class="fade_bottom">Blaze is a trailblazing architecture agency renowned for its innovative
                            approach to design, where creativity meets functionality. From futuristic skyscrapers to
                            timeless cultural landmarks, We specializes in crafting spaces that inspire and endure.
                            Blaze pushes boundaries, transforming bold concepts into architectural masterpieces. .
                        </p>
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

                    </div>
                </div>
            </div>
        </section>

        <!--===== start wpo-service-section =====-->
        <section class="wpo-service-section-s15 section-padding">
            <div class="container-fluid p-0">
                <div class="title">
                    <h2 class="poort-text poort-in-right">My Services</h2>
                    <h3 class="poort-text poort-in-right">What I Do For You</h3>
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

        <!--===== start wpo-project-section =====-->
        <section class="wpo-project-section-s15 section-padding">
            <div class="wraper">
                <div class="title">
                    <h2 class="fade_bottom">Portfolio</h2>
                    <h3 class="poort-text poort-in-right">Discover Our Recent Projects</h3>
                    <p class="poort-text poort-in-right">Gravida orci laoreet eros platea curabitur scelerisque quis
                        cras scelerisque. Fermentum mus et viverra purus nibh fusce integer. Aenean cursus quis pharetra
                        vitae vel sit ac malesuada.
                    </p>
                    <div class="project-allBtn fade_bottom">
                        <a href="projects.php" class="theme-btn"><span class="rolling-text">See All Projects</span>
                            <img src="assets/images/right-arrow-2.svg" alt=""></a>
                    </div>
                </div>
                <div class="project-content ">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                            <div class="item">
                                <div class="imgWrap">
                                    <img src="assets/images/project/project-13/1.jpg" alt="" class="x1">
                                </div>
                                <div class="content">
                                    <h2><a href="project-single.php">Kitchen Renovation</a></h2>
                                    <span>Building, Apartment</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                            <div class="item">
                                <div class="imgWrap">
                                    <img src="assets/images/project/project-13/2.jpg" alt="" class="x1">
                                </div>
                                <div class="content">
                                    <h2><a href="project-single.php">Apartment Of UK</a></h2>
                                    <span>Building, Apartment</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                            <div class="item">
                                <div class="imgWrap">
                                    <img src="assets/images/project/project-13/3.jpg" alt="" class="x1">
                                </div>
                                <div class="content">
                                    <h2><a href="project-single.php">Museum Of Paris</a></h2>
                                    <span>Building, Apartment</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--===== start wpo-testimonial-section =====-->
        <section class="wpo-testimonial-section-s3 section-padding">
            <div class="testimonial-slider-s3 owl-carousel">
                <div class="item">
                    <div class="content">
                        <div class="icon">
                            <img src="assets/images/testimonial/quote-2.svg" alt="quote">
                        </div>
                        <h3>“Bliize next level flexitarian yr bicycle rights waistcoat bit austin tofu-daa glossier
                            whatever scenester snack wave literally can shaman grained.”</h3>
                        <div class="client-wrap">
                            <div class="image">
                                <img src="assets/images/testimonial/client/1.jpg" alt="">
                            </div>
                            <div class="text">
                                <h4>Leslie Alexander</h4>
                                <span>Marketing Coordinator</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <div class="icon">
                            <img src="assets/images/testimonial/quote-2.svg" alt="quote">
                        </div>
                        <h3>“Bliize next level flexitarian yr bicycle rights waistcoat bit austin tofu-daa glossier
                            whatever scenester snack wave literally can shaman grained.”</h3>
                        <div class="client-wrap">
                            <div class="image">
                                <img src="assets/images/testimonial/client/2.jpg" alt="">
                            </div>
                            <div class="text">
                                <h4>John Abraham</h4>
                                <span>WEb Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <div class="icon">
                            <img src="assets/images/testimonial/quote-2.svg" alt="quote">
                        </div>
                        <h3>“Bliize next level flexitarian yr bicycle rights waistcoat bit austin tofu-daa glossier
                            whatever scenester snack wave literally can shaman grained.”</h3>
                        <div class="client-wrap">
                            <div class="image">
                                <img src="assets/images/testimonial/client/1.jpg" alt="">
                            </div>
                            <div class="text">
                                <h4>Leslie Alexander</h4>
                                <span>Marketing Coordinator</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <div class="icon">
                            <img src="assets/images/testimonial/quote-2.svg" alt="quote">
                        </div>
                        <h3>“Bliize next level flexitarian yr bicycle rights waistcoat bit austin tofu-daa glossier
                            whatever scenester snack wave literally can shaman grained.”</h3>
                        <div class="client-wrap">
                            <div class="image">
                                <img src="assets/images/testimonial/client/2.jpg" alt="">
                            </div>
                            <div class="text">
                                <h4>John Abraham</h4>
                                <span>WEb Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===== start wpo-team-section =====-->
        <section class="wpo-team-section-s15 section-padding">
            <div class="container-fluid">
                <div class="title">
                    <h2 class="poort-text poort-in-right">Our Team</h2>
                    <h3 class="poort-text poort-in-right">Our Expert Architect</h3>
                </div>
                <div class="team-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="team-card-s12">
                                <div class="image">
                                    <img src="assets/images/team/img-5.jpg" alt="team">
                                    <img src="assets/images/team/img-5.jpg" alt="team">
                                </div>
                                <div class="text">
                                    <h2><a href="team-single.php"> <span class="rolling-text">Wade Warren</span></a>
                                    </h2>
                                    <span>Senior Architect </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="team-card-s12">
                                <div class="image">
                                    <img src="assets/images/team/img-6.jpg" alt="team">
                                    <img src="assets/images/team/img-6.jpg" alt="team">
                                </div>
                                <div class="text">
                                    <h2><a href="team-single.php"> <span class="rolling-text">Esther Howard</span></a>
                                    </h2>
                                    <span>Senior Architect </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="team-card-s12">
                                <div class="image">
                                    <img src="assets/images/team/img-7.jpg" alt="team">
                                    <img src="assets/images/team/img-7.jpg" alt="team">
                                </div>
                                <div class="text">
                                    <h2><a href="team-single.php"> <span class="rolling-text">Robert Willum</span></a>
                                    </h2>
                                    <span>Senior Architect </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="team-card-s12">
                                <div class="image">
                                    <img src="assets/images/team/img-8.jpg" alt="team">
                                    <img src="assets/images/team/img-8.jpg" alt="team">
                                </div>
                                <div class="text">
                                    <h2><a href="team-single.php"> <span class="rolling-text">Guy Hawkins</span></a>
                                    </h2>
                                    <span>Senior Architect </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===== start wpo-consultaForm-section =====-->
        <section class="wpo-consultaForm-section-s3">
            <div class="wraper" style="background: url(assets/images/contact-bg-2.jpg);">
                <div class="contact">
                    <h2>Get A Free Consultation</h2>
                    <form method="post" class="contact-validation-active " id="consultaForm">
                        <div>
                            <label>Name*</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div>
                            <label>Email*</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div>
                            <label>Phone</label>
                            <input type="number" class="form-control" name="phone" id="phone">
                        </div>
                        <div>
                            <label>Subject*</label>
                            <select name="subject" id="subject" class="form-control">
                                <option>Subject 1</option>
                                <option>Subject 2</option>
                                <option>Subject 3</option>
                                <option>Subject 4</option>
                            </select>
                        </div>
                        <div class="fullwidth">
                            <label>Message</label>
                            <textarea class="form-control" name="note" id="note"></textarea>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="shop-btn">Send Message</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>


        <!-- start wpo-site-footer -->
        <?php include './partials/footer.php' ?>
        <!-- end wpo-site-footer -->

    </div>
    <!-- end of page-wrapper -->
    <?php include './partials/script.php' ?>
</body>

</html>