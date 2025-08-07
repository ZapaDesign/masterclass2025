<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>


    <main class="main-content">
        <div class="grid-container full">
            <?php get_template_part('parts/courses-navigation'); ?>
            <div class="grid-x">
                <div class="cell small-12 large-9 xlarge-10 main-wrap">

                    <?php if ( function_exists('yoast_breadcrumb') ): ?>
                        <div class="site__breadcrumbs">
                            <?php yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php the_title( '<h1 class="page__title">', '</h1>' ); ?>

                    <div class="page__content">
                        <div class="contacts__info">
                            <div class="grid-x">
                                <div class="cell small-12 medium-6">

                                    <div class="contact__links">
                                        <?php if ( $address = get_field( 'address', 'option' ) ): ?>
                                            <address class="contact-link contact-link--address">
                                                <a href="<?php echo get_address_url( $address ); ?>"><?php echo $address; ?></a>
                                            </address>
                                        <?php endif; ?>
                                        <?php if ( $email = get_field( 'email', 'options' ) ): ?>
                                            <p class="contact-link contact-link--email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                                        <?php endif; ?>
                                        <?php if ( $phone = get_field( 'phone', 'options' ) ): ?>
                                            <p class="contact-link contact-link--phone"><a href="tel:<?php echo sanitize_number( $phone ); ?>"><?php echo $phone; ?></a>
                                            </p>
                                        <?php endif; ?>
                                    </div>


                                    <?php if ( class_exists( 'GFAPI' ) && ( $contact_form = get_field( 'contact_form' ) ) && is_array( $contact_form ) ): ?>
                                        <div class="form-container">
                                            <div class="cell medium-6">
                                                <div class="contact__form">
                                                    <?php echo do_shortcode( "[gravityform id='{$contact_form['id']}' title='false' description='false' ajax='true']" ); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
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
