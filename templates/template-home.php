<?php
/**
 * Template Name: Home Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MasterCLASS
 */

get_header(); ?>

    <!--HOME PAGE SLIDER-->
<!--    --><?php //home_slider_template(); ?>
    <!--END of HOME PAGE SLIDER-->

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="flexible-sections" id="flexible-sections">
                <?php while (have_rows('flexible')) : the_row();
                    get_template_part('parts/flexible/flexible', get_row_layout(), $args = array('id' => uniqid()));
                endwhile; ?>
            </div>
        </main>
    </div>

<?php
get_footer();
