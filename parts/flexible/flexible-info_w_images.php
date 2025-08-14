<?php
$header = get_sub_field('header');
$left = get_sub_field('left');
$right = get_sub_field('right');
$footer = get_sub_field('footer');
?>


<section class="flex-sec info-w-img">
    <?php if ($header): ?>
        <h2 data-scroll class="max-w-7xl text-center mx-auto ease-btm mb-8">
            <?php echo $header; ?>
        </h2>
    <?php endif; ?>


    <div class="si__section relative mb-30 px-8">
        <?php if (isset($left['image'])) echo wp_get_attachment_image($left['image']['id'], 'full', false, ['class' => '', 'alt' => $left['image']['alt']]); ?>

        <div data-scroll class="si__text lg:absolute z-10 left-20 -bottom-10 lg:w-1/2 ease-left">
            <?php if ($left['content']) echo $left['content'] ?>
        </div>
    </div>

    <div class="si__section relative">
        <?php if (isset($right['image'])) echo wp_get_attachment_image($right['image']['id'], 'full', false, ['class' => 'lg:w-1/2', 'alt' => $right['image']['alt']]); ?>

        <div data-scroll class="si__text si__text lg:absolute z-10 right-20 bottom-0 lg:w-1/2 ease-right">
            <?php if ($right['content']) echo $right['content'] ?>
        </div>

    </div>

    <?php if ($footer): ?>
        <div data-scroll class="h3 ease-btm bg-red text-white text-center p-8 mt-10 font-bold mx-auto lg:max-w-7xl xl:max-w-5xl">
            <?php echo $footer ?>
        </div>
    <?php endif; ?>
</section>
