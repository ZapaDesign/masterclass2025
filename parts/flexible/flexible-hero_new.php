<?php

/**
 * @var array $args
 */

$content = get_sub_field('content');
$services = get_sub_field('services');
$sub_content = get_sub_field('sub_content');
$settings = get_sub_field('settings');
?>

<?php if (is_user_logged_in()): ?>
    <section class="hero bg-white" id="<?php echo $args['id']; ?>">
        <div class="pt-40 bg-[image:var(--gradient-main)]  bg-no-repeat">
            <div class="grid-container relative">
                <div class="w-full grid grid-cols-1 md:grid-cols-12 gap-y-4 md:gap-x-4 mb-8 items-center">
                    <div class="col-span-7">
                        <?php if ($content): ?>
                            <div class="mb-12 [&_h1]:mb-10 [&_p]:mb-6 [&_h1]:text-2xl [&_h1]:md:text-4xl [&_h1]:lg:text-6xl [&_h1]:font-bold text-heading [&_p]:text-xl [&_p]:md:text-2xl [&_p]:lg:text-4xl [&_p]:font-heading"><?php echo $content; ?></div>
                        <?php endif; ?>
                        <button
                                data-fancybox data-src="#hidden-content" href="javascript:;"
                                class="text-heading button bg-yellow text-black w-full border-4 border-white py-4 shadow-main hover:shadow-main-dark uppercase"><?php echo __('Спробуй безкоштовно', 'masterclass'); ?></button>
                    </div>
                    <div class="col-span-5">
                        <div class="h-100 bg-yellow w-100 max-w-full mx-auto rounded-t-full"></div>
                    </div>
                </div>




                <?php if ($services): ?>
                    <div class="hero__services pb-8 md:pb-40 ">

                        <?php if (isset($services['title'])): ?>
                            <h2 class="mb-2 text-3xl font-bold"><?php echo $services['title']; ?></h2>
                        <?php endif; ?>

                        <?php if (isset($services['list'])): ?>
                            <div class="js-services-slider [&_.slick-list]:!py-6">
                                <?php foreach ($services['list'] as $service): ?>
                                    <div class="px-4">
                                        <a href="<?php echo get_permalink($service->ID); ?>"
                                           class="group flex flex-col rounded-2xl bg-white overflow-hidden shadow-lg hover:scale-105 transition-all">
                                            <div class="flex-1 overflow-hidden">
                                                <?php if ($image_id = get_post_thumbnail_id($service->ID)) {
                                                    echo wp_get_attachment_image($image_id, 'full', false, [
                                                        'class' => 'object-cover object-center w-full h-full',
                                                        'alt' => get_post_meta($image_id, '_wp_attachment_image_alt', TRUE)
                                                    ]);
                                                } ?>
                                            </div>
                                            <h3 class="flex-none p-4 leading-none min-h-16 font-semibold color-text"><?php echo $service->post_title; ?></h3>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>


                <?php if ($sub_content): ?>
                    <div class="md:px-5 md:absolute md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 w-max md:text-xl text-heading max-w-full z-10 ">
                        <div class="max-w-5xl mx-auto border-[6px] border-brand rounded-4xl bg-white p-8  shadow-lg">
                            <?php echo $sub_content; ?></div>
                        </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


