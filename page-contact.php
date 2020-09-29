<?php

/*
Template Name: 取材/お問い合わせ
*/

?>


<?php get_header(); ?>

<div class="container-fluid bg-gray">
    <div class="container">
        <div class="row">
            <h2 class="heading-lg">取材/お問い合わせ</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 kitou-top-box pb-5">
            <h3 class="heading-sm">お問い合わせ（企業様）</h3>
            <div class="card kitou-card-box">
                <div class="row no-gutters">
                    <div class="col-md-12 pb-5">
                        <?php echo do_shortcode('[contact-form-7 id="197" title="絶対音感_企業様"]'); ?>
                    </div>

                    <h3 class="heading-sm">お問い合わせ（一般）</h3>

                    <div class="col-md-12 pb-5">
                        <?php echo do_shortcode('[contact-form-7 id="200" title="絶対音感_一般"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
