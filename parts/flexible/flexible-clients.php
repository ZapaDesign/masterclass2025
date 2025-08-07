<?php
$title = get_sub_field('title');
$list = get_sub_field('list');
?>

<?php if ($list): ?>
    <section id="clients" class="clients">
        <div class="grid-container">
            <?php if ($title): ?>
                <h2 class="clients__title">
                    <?php echo $title; ?>
                </h2>
            <?php endif; ?>

            <ul class="clients__list">
                <?php foreach ($list as $item): ?>
                    <li>

                            <div class="clients__img">
                                <?php if ($image = $item['logo']) {
                                    echo wp_get_attachment_image($image['id'], 'medium', false, [
                                        'class' => '',
                                        'alt' => $image['alt']
                                    ]);
                                } ?>
                            </div>
                            <div class="text-center">
                                <?php echo $item['name']; ?>
                            </div>

                    </li>
                <?php endforeach; ?>

            </ul>


            <div class="clients__navigation">
                <div class="slider__button slider__button--left "></div>
                <div class="slider__dots-container"></div>
                <div class="slider__button slider__button--right"></div>
            </div>
        </div>
    </section>
<?php endif; ?>

