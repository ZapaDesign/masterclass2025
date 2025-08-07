<?php
/**
Template Name: Price Page

 * @package MasterCLASS
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php get_template_part('template-parts/courses-navigation'); ?>

            <section>
                <div bp-layout="row gutter-none">
                    <div bp-layout="col 9@lg 10@xl" class="page__content">
                        <?php get_template_part( 'template-parts/breadcrumbs'); ?>
                        <?php the_title( '<h1 class="page__title">', '</h1>' ); ?>
                        <section class="promo">
                            <h2 class="promo__title">
                                <?php _e( 'Promotions', 'masterclass' ) ?>
                            </h2>
                            <div bp-layout="row" class="jc-space-evenly">

                                <?php	$promo_items = carbon_get_post_meta( get_the_ID(), 'promo_items' );
                                if (  $promo_items  ) {
                                    foreach ( $promo_items as $promo_item ){ ?>

                                        <div bp-layout="col <?php echo $promo_item['promo_md']; ?>@md <?php echo $promo_item['promo_lg']; ?>@lg">
                                            <div class="promo__item">
                                                <?php echo wp_get_attachment_image( $promo_item['promo_img'], 'full'); ?>
                                                <h3 class="promo__item__title"><?php echo $promo_item['promo_title']; ?></h3>
                                                <div class="promo__item__description"s>
                                                    <?php echo $promo_item['promo_text']; ?>
                                                </div>
                                            </div>
                                        </div>

                                    <?php }	} ?>

                            </div>
                        </section>
                        <section class="price">
                            <h2 class="price__title">
                                <?php _e( 'Cost of education', 'masterclass' ) ?>
                            </h2>
                            <ul class="price__items">
                                <li bp-layout="row gutter-none" class="price__item">
                                    <div bp-layout="col 7@md 6@lg">
                                        <table bp-layout="10--max" class="price__item__table" >
                                            <caption class="price__item__titile"><?php echo carbon_get_post_meta( get_the_ID(), 'price1_title' ); ?></caption>
                                            <tr>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col1' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col2' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col3' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col4' ); ?></th>
                                            </tr>
                                            <?php	$price1_items = carbon_get_post_meta( get_the_ID(), 'price1_items' );
                                            if (  $price1_items  ) {
                                                foreach ( $price1_items as $price1_item ){ ?>
                                                    <tr>
                                                        <td> <?php echo $price1_item['price1_col1']; ?> </td>
                                                        <td> <?php echo $price1_item['price1_col2']; ?> </td>
                                                        <td> <?php echo $price1_item['price1_col3']; ?> </td>
                                                        <td> <?php echo $price1_item['price1_col4']; ?> </td>
                                                    </tr>
                                                <?php }	} ?>
                                        </table>
                                    </div>
                                    <div bp-layout="col 5@md 6@lg" class="price__item__img">
                                        <img src="<?php bloginfo('stylesheet_directory');?>/img/price-6.jpg" alt="">
                                    </div>
                                </li>
                                <li bp-layout="row gutter-none" class="price__item">
                                    <div bp-layout="col 7@md 6@lg">
                                        <table bp-layout="10--max" class="price__item__table" >
                                            <caption class="price__item__titile"><?php echo carbon_get_post_meta( get_the_ID(), 'price2_title' ); ?></caption>
                                            <tr>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col1' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col2' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col3' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col4' ); ?></th>
                                            </tr>
                                            <?php	$price2_items = carbon_get_post_meta( get_the_ID(), 'price2_items' );
                                            if (  $price2_items  ) {
                                                foreach ( $price2_items as $price2_item ){ ?>
                                                    <tr>
                                                        <td> <?php echo $price2_item['price2_col1']; ?> </td>
                                                        <td> <?php echo $price2_item['price2_col2']; ?> </td>
                                                        <td> <?php echo $price2_item['price2_col3']; ?> </td>
                                                        <td> <?php echo $price2_item['price2_col4']; ?> </td>
                                                    </tr>
                                                <?php }	} ?>
                                        </table>
                                    </div>
                                    <div bp-layout="col 5@md 6@lg" class="price__item__img">
                                        <img src="<?php bloginfo('stylesheet_directory');?>/img/price-4.jpg" alt="">
                                    </div>
                                </li>
                                <li bp-layout="row gutter-none" class="price__item">
                                    <div bp-layout="col 7@md 6@lg">
                                        <table bp-layout="10--max" class="price__item__table" >
                                            <caption class="price__item__titile"><?php echo carbon_get_post_meta( get_the_ID(), 'price3_title' ); ?></caption>
                                            <tr>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col1' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col2' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col3' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col4' ); ?></th>
                                            </tr>
                                            <?php	$price3_items = carbon_get_post_meta( get_the_ID(), 'price3_items' );
                                            if (  $price3_items  ) {
                                                foreach ( $price3_items as $price3_item ){ ?>
                                                    <tr>
                                                        <td> <?php echo $price3_item['price3_col1']; ?> </td>
                                                        <td> <?php echo $price3_item['price3_col2']; ?> </td>
                                                        <td> <?php echo $price3_item['price3_col3']; ?> </td>
                                                        <td> <?php echo $price3_item['price3_col4']; ?> </td>
                                                    </tr>
                                                <?php }	} ?>
                                        </table>
                                    </div>
                                    <div bp-layout="col 5@md 6@lg" class="price__item__img">
                                        <img src="<?php bloginfo('stylesheet_directory');?>/img/price-2.jpg" alt="">
                                    </div>
                                </li>
                                <li bp-layout="row gutter-none" class="price__item">
                                    <div bp-layout="col 7@md 6@lg">
                                        <table bp-layout="10--max" class="price__item__table" >
                                            <caption class="price__item__titile"><?php echo carbon_get_post_meta( get_the_ID(), 'price4_title' ); ?></caption>
                                            <tr>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col1' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col2' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col3' ); ?></th>
                                                <th><?php echo carbon_get_post_meta( get_the_ID(), 'price0_col5' ); ?></th>
                                            </tr>
                                            <?php	$price4_items = carbon_get_post_meta( get_the_ID(), 'price4_items' );
                                            if (  $price4_items  ) {
                                                foreach ( $price4_items as $price4_item ){ ?>
                                                    <tr>
                                                        <td> <?php echo $price4_item['price4_col1']; ?> </td>
                                                        <td> <?php echo $price4_item['price4_col2']; ?> </td>
                                                        <td> <?php echo $price4_item['price4_col3']; ?> </td>
                                                        <td> <?php echo $price4_item['price4_col4']; ?> </td>
                                                    </tr>
                                                <?php }	} ?>
                                        </table>
                                    </div>
                                    <div bp-layout="col 5@md 6@lg" class="price__item__img">
                                        <img src="<?php bloginfo('stylesheet_directory');?>/img/price-1.jpg" alt="">
                                    </div>
                                </li>
                            </ul>
                        </section>

                        <?php get_template_part('template-parts/social-buttons'); ?>

                    </div>
                    <div bp-layout="col 3@lg hide show@lg 2@xl" class="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
