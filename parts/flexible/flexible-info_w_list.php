<?php
$content = get_sub_field('content');
$list = get_sub_field('list');
?>


<section class="bg-white grid grid-cols-12">
    <div class="col-span-12 md:col-span-7">
        <div class="[&_h2]:text-2xl [&_h2]:md:text-3xl [&_h2]:lg:text-5xl editor px-5 pt-20 md:pt-40 lg:pt-50 pb-20 max-w-3xl mx-auto">
            <?php if ($content) echo $content; ?>
        </div>
        <div class="bg-pink px-5 py-12">
            <div class="max-w-3xl mx-auto">
                <?php if ($header = $list['header']): ?>
                    <p class="h2 text-center deco-title inline-flex flex-1 mx-auto w-full mb-8 items-center gap-4"><?php echo $header; ?></p>
                <?php endif; ?>

                <?php if ($list['list']): ?>
                    <ul class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-8 mx-0 mb-8">
                        <?php foreach ($list['list'] as $item): ?>
                            <li class="">
                                <?php if ($image = $item['image']) echo wp_get_attachment_image($image['id'], 'medium', false, ['class' => '', 'alt' => $image['alt']]); ?>
                                <?php if ($text = $item['text']): ?>
                                    <p><?php echo $text; ?></p>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if ($footer = $list['footer']): ?>
                    <p class="h2 text-center deco-title inline-flex flex-1 mx-auto w-full items-center gap-4"><?php echo $footer; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-span-12 md:col-span-5 opacity-90 hidden md:block">
        <?php if ($image = get_sub_field('image')) echo wp_get_attachment_image($image['id'], 'full', false, [
            'class' => 'object-cover w-full h-full',
            'alt' => $image['alt']
        ]);
        ?>
    </div>
</section>
