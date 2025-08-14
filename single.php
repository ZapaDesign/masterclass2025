<?php
/**
 * Single
 *
 * Loop container for single post content
 */
get_header(); ?>
    <main class="main-content site-main">
        <div class="grid-container full">
            <?php get_template_part('parts/courses-navigation'); ?>
			<div class="grid-x">
                <div class="cell small-12 large-9 xlarge-10">

                    <?php if ( function_exists('yoast_breadcrumb') ): ?>
                        <div class="site__breadcrumbs">
                            <?php yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article <?php post_class( 'entry' ); ?>>
                                <div class="post-header">
                                    <?php the_title( '<h1 class="entry__title">', '</h1>' ); ?>
                                    <?php the_post_thumbnail('full',array('class' => "post__thumbnail"));?>
                                    <div bp-layout="7--max" class="post__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <div class="entry__content">
                                    <?php if (!is_user_logged_in()): ?>
                                    <?php the_content( '', true ); ?>
                                    <?php endif; ?>
                                </div>

                                <?php if (is_user_logged_in()): ?>
                                    <div class="flexible-sections" id="flexible-sections">
                                        <?php while (have_rows('flexible')) : the_row();
                                            get_template_part('parts/flexible/flexible', get_row_layout(), $args = array('id' => uniqid()));
                                        endwhile; ?>
                                    </div>
                                <?php endif; ?>
                                <?php show_template('share-links'); ?>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>

				</div>
                <div class="cell small-12 large-3 xlarge-2 sidebar show-for-large">
                    <?php get_sidebar( 'right' ); ?>
                </div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
