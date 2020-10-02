<?php

/*
Template Name: ブログ（一覧）
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
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <?php $args = array('post_type' => 'blog',
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'posts_per_page' => 10,
                        'order' => 'DESC'); ?>
                        <?php $wp_query = new WP_Query($args); ?>
                            <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                                <h3 class="heading-sm"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php if(get_the_term_list($post->ID, 'blog_cat')) { ?>
                                    カテゴリー：<?php echo get_the_term_list($post->ID, 'blog_cat'); ?><br>
                                <?php } else { ?>
                                    カテゴリー：－<br>
                                <?php } ?>
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
                        <?php else : ?>
                        <?php endif; ?>

                        <?php if( $wp_query->max_num_pages > 1 ): ?>
                            <span class="new">
                            <?php previous_posts_link( '<i class="fa fa-chevron-circle-left"></i>&nbsp;新しい記事' ); ?>
                            </span>
                            <span class="old">
                            <?php next_posts_link( '過去の記事&nbsp;<i class="fa fa-chevron-circle-right"></i>' ); ?>
                            </span>
                        <?php endif; ?>

                        <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
