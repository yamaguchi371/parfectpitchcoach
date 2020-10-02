<?php

/*
Template Name: ブログアーカイブ
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
            <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                <h3 class="heading-sm"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                カテゴリー：<?php echo get_the_term_list($post->ID, 'blog_cat'); ?><br>
                <div class="card kitou-card-box">
                    <div class="row no-gutters">
                        <div class="col-md-12 pb-5">
                        <a href="<?php the_permalink(); ?>">
                        <span style="display: inline; float: left;padding: 10px;">
                        <?php if(has_post_thumbnail()) { ?>
                            <?php the_post_thumbnail(); ?>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog/noimage.jpg" alt="no-image" width="150px" />
                        <?php } ?>
                        </span>
                        <?php the_excerpt(); ?>
                        </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
