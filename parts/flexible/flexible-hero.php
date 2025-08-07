<?php
$content = get_sub_field('content');
$form = get_sub_field('form');
?>
<?php if (!is_user_logged_in()): ?>
<section class="hero--old" <?php bg(wp_get_attachment_url(get_post_thumbnail_id())); ?>>
        <div class="hero--old__content" >
            <?php if ($content) echo $content; ?>
            <a data-fancybox data-src="#hidden-content" href="javascript:;" class="button">
                <?php echo __('Спробуй безкоштовно', 'default'); ?>
            </a>
            <div style="display: none;" id="hidden-content">
                <?php if (class_exists('GFAPI') && ($form) && is_array($form)): ?>
                    <div class="cell medium-6">
                        <div class="contact__form">
                            <?php echo do_shortcode("[gravityform id='{$form['id']}' title='false' description='false' ajax='true']"); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <div class="hero--old__overlay"></div>
</section>
<?php endif; ?>


