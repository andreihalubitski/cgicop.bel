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
        $Title = 'Wishlist';
        $MainTitle = 'Your Added Products';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start wpo-checkout-area  =====-->
        <div class="cart-area section-padding pt-0">
            <div class="container">
                <div class="form">
                    <div class="cart-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <form action="cart">
                                    <table class="table-responsive cart-wrap">
                                        <thead>
                                            <tr>
                                                <th class="images images-b">Image</th>
                                                <th class="product-2">Product Name</th>
                                                <th class="pr">Price</th>
                                                <th class="ptice">Stock Status</th>
                                                <th class="stock">Action</th>
                                                <th class="remove remove-b"> Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="images"><img src="assets/images/cart/1.jpg" alt=""></td>
                                                <td class="product">
                                                    <ul>
                                                        <li class="first-cart">Stylish Wooden Chair</li>
                                                        <li>Brand : Cuppa</li>
                                                    </ul>
                                                </td>
                                                <td class="stock">$ 250</td>
                                                <td class="stock">In Stock</td>
                                                <td class="add-wish">
                                                    <a class="theme-btn" href="cart.php">Add to Cart</a>
                                                </td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Remove from Wishlist"
                                                                href="#"><i class="fi ti-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="images"><img src="assets/images/cart/2.jpg" alt=""></td>
                                                <td class="product">
                                                    <ul>
                                                        <li class="first-cart">Table With Vase</li>
                                                        <li>Brand : Cuppa</li>
                                                    </ul>
                                                </td>
                                                <td class="stock">$200</td>
                                                <td class="stock">Out Stock</td>
                                                <td class="add-wish">
                                                    <a class="theme-btn" href="cart.php">Add to Cart</a>
                                                </td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn"><a data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Remove from Wishlist"
                                                                href="#"><i class="fi ti-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </form>

                            </div>
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