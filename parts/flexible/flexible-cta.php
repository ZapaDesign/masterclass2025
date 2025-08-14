<?php
$content = get_sub_field('content');
$form = get_sub_field('form');
$settings = get_sub_field('settings');
/**
 * @var array $args
 */
?>

<section class="flex-content-section bg-white my-0 py-16">
    <div class="content-container">
        <?php if($content): ?>
            <div class=""><?php echo $content; ?></div>
        <?php endif; ?>

        <button data-fancybox data-src="#hidden-content" href="javascript:;"
            class="text-heading button bg-yellow text-black w-full border-4 border-white py-4 shadow-main hover:shadow-main-dark uppercase">
            <?php echo __('Спробуй безкоштовно', 'masterclass'); ?>
        </button>
    </div>
</section>
