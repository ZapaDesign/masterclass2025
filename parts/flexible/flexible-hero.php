<?php
$content = get_sub_field('content');

?>
<?php if (!is_user_logged_in()): ?>
<section class="hero--old" <?php bg(wp_get_attachment_url(get_post_thumbnail_id())); ?>>
        <div class="hero--old__content" >
            <?php if ($content) echo $content; ?>
            <a data-fancybox data-src="#hidden-content" href="javascript:;" class="button">
                <?php echo __('Спробуй безкоштовно', 'default'); ?>
            </a>
        </div>
    <div class="hero--old__overlay"></div>
</section>
<?php endif; ?>


