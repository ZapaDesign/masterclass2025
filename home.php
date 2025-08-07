<?php
/**
 * Home
 *
 * Standard loop for the blog-page
 */

$blog_title = get_field('blog_title', 'options');
get_header(); ?>

	<main class="main-content">

        <?php get_template_part('parts/courses-navigation'); ?>

		<div class="grid-container full">
			<div class="grid-x">

                <div class="cell small-12 large-9 xlarge-10 page__content">

                    <?php if ( function_exists('yoast_breadcrumb') ): ?>
                        <div class="site__breadcrumbs">
                            <?php yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="page__title">
                        <span>
                            <?php echo $blog_title ?? 'Blog'; ?>
                        </span>
                    </h1>



                    <div class="grid-container">
                        <div class="posts-list grid-x grid-margin-x grid-margin-y">
                            <?php if ( have_posts() ) : ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <div class="cell small-12 medium-6">
                                        <?php get_template_part( 'parts/loop', 'post' ); ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php starter_pagination(); ?>
                        </div>
                    </div>

				</div>

                <div class="cell small-12 large-3 xlarge-2 sidebar show-for-large">
					<?php get_sidebar( 'right' ); ?>
				</div>

			</div>
		</div>
	</main>

<?php get_footer(); ?>
