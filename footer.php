<?php
/**
 * Footer
 */

$working_time = get_field('working_time', 'options');
$form = get_field('lead_form', 'options');
?>
<footer id="colophon" class="site-footer">
    <div class="grid-container footer__contant">
        <div class="grid-x grid-margin-x grid-margin-y">
            <div class="cell small-12 medium-6 large-3 footer__branding">
                <?php the_custom_logo(); ?>
                <p>
                    Весь зміст, включаючи ідеї оформлення та стиль, є об'єктом авторського права. Копіювання та розміщення матеріалів на інших сайтах без письмового дозволу адміністрації мовного шоли MasterCLASS не допускається.
                </p>
                <ul>
                    <!--                    <li>-->
                    <!--                        <a href="https://vk.com/id311434787" rel="nofollow">-->
                    <!--                            <svg>-->
                    <!--                                <use xlink:href="--><?php //bloginfo('stylesheet_directory');?><!--/assets/images/svg.svg#icon_social_vk"></use>-->
                    <!--                            </svg>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                    <li>
                        <a href="https://www.facebook.com/MasterCLASS.pl.ua" rel="nofollow">
                            <svg>
                                <use xlink:href="<?php bloginfo('stylesheet_directory');?>/assets/images/svg.svg#icon_social_fb"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com/masterclass.pl" rel="nofollow">
                            <svg>
                                <use xlink:href="<?php bloginfo('stylesheet_directory');?>/assets/images/svg.svg#icon_social_inst"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="cell small-12 medium-6 large-2 opening-hours">
                <header class="opening-hours__title">
                    <?php echo __( 'Ми працюємо', 'masterclass' ) ?>
                </header>
                <?php if($working_time): ?>
                    <ul>
                        <?php foreach($working_time as $item): ?>
                            <li>
                                <span><?php echo $item['working_time_text']; ?></span>
                                <span><?php echo $item['working_time_period']; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="cell small-12 medium-6 large-3 footer__contacts">
                <header>
                    <?php echo __( 'Контакти', 'masterclass' ) ?>
                </header>
                <ul>
                    <li>
                        <svg>
                            <use xlink:href="<?php bloginfo('stylesheet_directory');?>/assets/images/svg.svg#icon_contacts_location"></use>
                        </svg>
                        <div>
                            <ul class="footer__phone">
                                <?php if($address = get_field('address', 'options')): ?>
                                    <li><?php echo $address; ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <svg>
                            <use xlink:href="<?php bloginfo('stylesheet_directory');?>/assets/images/svg.svg#icon_contacts_phone"></use>
                        </svg>
                        <div>
                            <ul class="footer__phone">
                                <?php if($phone = get_field('phone', 'options')): ?>
                                    <li><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <svg>
                            <use xlink:href="<?php bloginfo('stylesheet_directory');?>/assets/images/svg.svg#icon_contacts_email"></use>
                        </svg>
                        <ul>
                            <?php if($email = get_field('email', 'options')): ?>
                                <li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="cell small-12 medium-6 large-4 footer__posts">
                <header>
                    <?php echo __( 'Останні записи в блозі', 'masterclass' ) ?>
                </header>
                <ul>
                    <?php

                    $myposts = get_posts( [
                        'posts_per_page' => 3,
                        'cat' => 'blog'
                    ]);
                    foreach( $myposts as $post ){ setup_postdata($post);
                        ?>
                        <li>
                            <?php the_post_thumbnail('thumbnail');?>
                            <div>
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php	the_title();?>
                                </a>
                            </div>
                        </li>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div style="display: none;" id="hidden-content">
        <?php if (class_exists('GFAPI') && ($form) && is_array($form)): ?>
            <?php echo do_shortcode("[gravityform id='{$form['id']}' title='false' description='false' ajax='true']"); ?>
        <?php endif; ?>
    </div>
</footer>



<!--<footer class="footer">-->
<!--	<div class="grid-container">-->
<!--		<div class="grid-x grid-margin-x">-->
<!--			<div class="cell medium-3">-->
<!--				<div class="footer__logo">-->
<!--					--><?php //if ( $footer_logo = get_field( 'footer_logo', 'options' ) ):
//						echo wp_get_attachment_image( $footer_logo['id'], 'medium' );
//					else:
//						show_custom_logo();
//					endif; ?>
<!--				</div>-->
<!--			</div>-->
<!--			<div class="cell medium-6">-->
<!--				--><?php
//				if ( has_nav_menu( 'footer-menu' ) ) {
//					wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu menu', 'depth' => 1 ) );
//				}
//				?>
<!--			</div>-->
<!--			<div class="cell medium-3 footer__sp">-->
<!--				--><?php //get_template_part('parts/socials'); // Social profiles ?>
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!---->
<!--	--><?php //if ( $copyright = get_field( 'copyright', 'options' ) ): ?>
<!--		<div class="footer__copy">-->
<!--			<div class="grid-container">-->
<!--				<div class="grid-x grid-margin-x">-->
<!--					<div class="cell ">-->
<!--						--><?php //echo $copyright; ?>
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	--><?php //endif; ?>
<!--</footer>-->


<?php wp_footer(); ?>
</body>
</html>
