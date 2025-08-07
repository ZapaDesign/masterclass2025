<section class="ccarousel">
    <ul class="ccarousel__items">

        <?php $services = get_posts( [
            'post_type' => 'service',
            'posts_per_page'	=> -1
        ]);


        foreach( $services as $post ):
            setup_postdata( $post );?>

            <li class="ccarousel__item">
                <div class="ccarousel__item-content">
                    <div class="ccarousel__item-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo get_the_title( ) ?>
                        </a>
                    </div>
                    <div class="ccarousel__item-img">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                </div>
            </li>

        <?php
        endforeach;
        wp_reset_postdata();
        ?>

    </ul>
</section>
