<?php
/**
 * Archive
 *
 * Standard loop for the archive page
 */

$services_title = get_field('services_title', 'options');

get_header(); ?>
    <main class="main-content site-main">
        <div class="grid-container full">
            <?php get_template_part('parts/courses-navigation'); ?>
            <div class="grid-x posts-list">
                <div class="cell small-12 large-9 xlarge-10 main-wrap">

                    <?php if (function_exists('yoast_breadcrumb')): ?>
                        <div class="site__breadcrumbs">
                            <?php yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="page__title">
                        <?php echo $services_title; ?>
                    </h1>


                    <?php if (have_posts()) : ?>
                        <ul class="courses__items">
                            <?php while (have_posts()) : the_post(); ?>
                                <li bp-layout="row gutter-none" class="courses__item">
                                    <div bp-layout="col 5@md" class="courses__item__contant">
                                        <h2 class="courses__item__titile">
                                            <a href="<?php echo get_permalink(); ?>">
                                                <?php	the_title();?>
                                            </a>
                                        </h2>
                                        <div class="courses__item__description">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <a class="courses__item__permalink" href="<?php echo get_permalink(); ?>">
                                            <?php _e('Детальніше','masterclass') ?>
                                        </a>
                                    </div>
                                    <div bp-layout="col 7@md" class="courses__item__img">
                                        <?php the_post_thumbnail('large');?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>

                    <?php starter_pagination(); ?>

                </div>

                <div class="cell small-12 large-3 xlarge-2 sidebar show-for-large">
                    <?php get_sidebar('right'); ?>
                </div>

            </div>
        </div>
    </main>



<?php get_footer(); ?>
