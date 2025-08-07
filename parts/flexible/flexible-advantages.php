<?php
$title = get_sub_field('title');
$list = get_sub_field('list');
?>

<?php if ($list): ?>
    <section class="flex-sec advantages grid-x">
        <div class="cell medium-1 advantages__title">
            <?php if ($title): ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>

        </div>
        <div class="cell small-12 medium-11 large-6">
            <?php if ($list): ?>
                <ul class="advantages__items">
                    <?php foreach ($list as $item): ?>
                        <li>
                            <div class="advantages__icon">
                                <svg><use xlink:href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/svg.svg#icon_advantages"></use></svg>
                            </div>
                            <div class="advantages__text"><?php echo $item['title']; ?></div>

<!--                            <?php /*if($item['sublist'] && is_array($item['sublist']) !== null): */?>
                                <ul>
                                <?php /*foreach($item['sublist'] as $subitem): */?>
                                    <li><?php /*echo $subitem['value']; */?></li>
                                <?php /*endforeach; */?>
                                </ul>
                            --><?php /*endif; */?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="cell large-5 show-for-large advantages__img">

        </div>
    </section>
<?php endif; ?>

