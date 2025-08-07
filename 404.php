<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>
<main class="main-content site-main">
	<div class="grid-container full">
		<div class="grid-x">

            <div class="cell small-12 large-6">
                <section class="error_404_text not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e('На жаль! Цю сторінку не вдається знайти.', 'masterclass'); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php esc_html_e('Схоже, у цьому місці нічого не знайдено. Можливо, спробуйте одну з посилань нижче або пошук?', 'masterclass'); ?></p>

                        <?php the_widget('WP_Widget_Recent_Posts'); ?>

<!--                        <div class="widget widget_categories">-->
<!--                            <h2 class="widget-title">--><?php //esc_html_e('Most Used Categories', 'masterclass'); ?><!--</h2>-->
<!--                            <ul>-->
<!--                                --><?php
//                                wp_list_categories(array(
//                                    'orderby' => 'count',
//                                    'order' => 'DESC',
//                                    'show_count' => 1,
//                                    'title_li' => '',
//                                    'number' => 10,
//                                ));
//                                ?>
<!--                            </ul>-->
<!--                        </div>-->

                    </div>
                </section>
            </div>
            <div class="cell small-12 large-6">
                <section class="error_404_img">
                    <div class="error_404_img_text">
                        <div>
                            <?php _e('error', 'masterclass') ?>
                        </div>
                        <div>
                            404
                        </div>
                    </div>
                </section>
            </div>
		</div>
	</div>
</main>>
<?php get_footer(); ?>
