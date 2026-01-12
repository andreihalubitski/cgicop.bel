<!-- start page-title -->
<section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <ol>
                        <?php if (!empty($Title)) : ?>
                            <li><?php echo $Title; ?></li>
                        <?php endif; ?>
                    </ol>
                    <?php if (!empty($MainTitle)) : ?>
                        <h2 class="poort-text poort-in-right"><?php echo $MainTitle; ?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page-title -->