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
            <?php include './partials/header-topbar.php' ?>
            <?php include './partials/header-four.php' ?>
        </header>
        <!-- end of header -->

        <!-- start wpo-page-title -->
        <?php
        $Title = 'Shop';
        $MainTitle = 'Best Interior Product';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start wpo-shop-section =====-->
        <section class="wpo-shop-section section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                        <div class="shop-card">
                            <div class="image">
                                <img src="assets/images/shop/1.jpg" alt="">
                                <button><i class="ti-heart"></i> <span>Add to cart</span></button>
                            </div>
                            <div class="content">
                                <h2><a href="shop-single.php">Stylish Wooden Chair</a></h2>
                                <del>$320.00</del>
                                <span>$280.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                        <div class="shop-card">
                            <div class="image">
                                <img src="assets/images/shop/2.jpg" alt="">
                                <button><i class="ti-heart"></i> <span>Add to cart</span></button>
                            </div>
                            <div class="content">
                                <h2><a href="shop-single.php">Table With Vase</a></h2>
                                <del>$400.00</del>
                                <span>$380.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                        <div class="shop-card">
                            <div class="image">
                                <img src="assets/images/shop/3.jpg" alt="">
                                <button><i class="ti-heart"></i> <span>Add to cart</span></button>
                            </div>
                            <div class="content">
                                <h2><a href="shop-single.php">Table Lamp</a></h2>
                                <del>$220.00</del>
                                <span>$180.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                        <div class="shop-card">
                            <div class="image">
                                <img src="assets/images/shop/4.jpg" alt="">
                                <button><i class="ti-heart"></i> <span>Add to cart</span></button>
                            </div>
                            <div class="content">
                                <h2><a href="shop-single.php">Stylish Mini Tables</a></h2>
                                <del>$420.00</del>
                                <span>$380.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                        <div class="shop-card">
                            <div class="image">
                                <img src="assets/images/shop/5.jpg" alt="">
                                <button><i class="ti-heart"></i> <span>Add to cart</span></button>
                            </div>
                            <div class="content">
                                <h2><a href="shop-single.php">Stylish Chandelier</a></h2>
                                <del>$320.00</del>
                                <span>$280.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                        <div class="shop-card">
                            <div class="image">
                                <img src="assets/images/shop/6.jpg" alt="">
                                <button><i class="ti-heart"></i> <span>Add to cart</span></button>
                            </div>
                            <div class="content">
                                <h2><a href="shop-single.php">Wooden Mini Rack</a></h2>
                                <del>$400.00</del>
                                <span>$380.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper pagination-wrapper-center">
                        <ul class="pg-pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
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