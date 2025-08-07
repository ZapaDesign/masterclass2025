<?php
$content = get_sub_field('content');
$services = get_sub_field('services');
$sub_content = get_sub_field('sub_content');
$settings = get_sub_field('settings');
?>

<?php if (is_user_logged_in()): ?>
    <section class="hero">
        <div class="grid-container">

            <div class="grid-x">
                <div class="cell small-12 large-7">
                    <?php if ($content): ?>
                        <div class="hero__content"><?php echo $content; ?></div>
                    <?php endif; ?>
                    <button class="button"><?php echo __('Спробуй безкоштовно', 'masterclass'); ?></button>
                </div>
                <div class="cell small-12 large-5"></div>
            </div>


            <?php if ($services): ?>
                <div class="hero__services">

                    <?php if(isset($services['title'])): ?>
                        <?php echo $services['title']; ?>
                    <?php endif; ?>

                    <?php if (isset($services['list'])): ?>
                        <?php foreach ($services['list'] as $service): ?>
                            <div>
                                <?php
                                echo '<pre>';
                                var_dump($service->post_title);
                                echo '</pre>';
                                ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>


            <?php if ($sub_content): ?>
                <div class="grid-x">
                    <div class="cell small-12 large-8">
                        <div class="hero__sub-content"><?php echo $sub_content; ?></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>


