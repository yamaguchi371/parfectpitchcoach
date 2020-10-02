<?php

/*
Template Name: ブログ（詳細）
*/

?>


<?php get_header(); ?>

<div class="container-fluid bg-gray">
    <div class="container">
        <div class="row">
            <h2 class="heading-lg">ブログ</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 kitou-top-box">
            <h3 class="heading-sm"><?php the_title(); ?></h3>
            <?php if(get_the_term_list($post->ID, 'blog_cat')) { ?>
                カテゴリー：<?php echo get_the_term_list($post->ID, 'blog_cat'); ?><br>
            <?php } else { ?>
                カテゴリー：－<br>
            <?php } ?>
            <?php the_category('/'); ?><br>
            <div class="card kitou-card-box">
                <div class="row no-gutters">
                    <div class="col-md-12 pb-5">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
