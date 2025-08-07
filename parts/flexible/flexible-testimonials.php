<?php
$title = get_sub_field('title');
$list = get_sub_field('list');
?>

<?php if ($list): ?>
    <section class="flex-sec testimonials">
        <div class="grid-container full">
            <div class="grid-x align-middle">
                <div class="testimonials__title cell medium-1">
                    <?php if ($title): ?>
                        <h2><?php echo $title; ?></h2>
                    <?php endif; ?>
                </div>

                <div class="cell medium-10">

                    <div class="testimonials__items testimonials__list">
                        <?php foreach ($list as $item): ?>
                            <div class="testimonials__item">
                                <div class="testimonials__text">
                                    <header class="testimonials__header">
                                        <div class="testimonials__photo">
                                            <?php if ($image = $item['author']['photo']) {
                                                echo wp_get_attachment_image($image['id'], 'medium', false, [
                                                    'class' => '',
                                                    'alt' => $image['alt']
                                                ]);
                                            } ?>
                                        </div>
                                        <div>
                                            <p><?php echo $item['author']['name']; ?></p>
                                            <p><?php echo $item['author']['desc']; ?></p>
                                        </div>
                                    </header>
                                    <div class="testimonials__text--fb">
                                        <?php echo $item['testimonial']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cell medium-1">
                    <div class="slider__navigation">
                        <div class="slider__button slider__button--left"></div>
                        <div class="slider__dots-container"></div>
                        <div class="slider__button slider__button--right"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

