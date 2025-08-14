<?php
$title = get_sub_field('title');
$list = get_sub_field('list');

/**
 * @var array $args
 */

$settings = get_sub_field('settings');
?>


<section class="flex-content-section">
    <div class="content-container">
        <?php if ($title): ?>
            <h2><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($list): ?>
            <ul class="accordion list-none" data-accordion>
                <?php foreach ($list as $idx => $item): ?>
                    <li class="accordion-item <?php if ($idx === 0) echo 'is-active'; ?>" data-accordion-item>
                        <a href="#" class="accordion-title"><?php echo $item['key']; ?></a>
                        <div class="accordion-content" data-tab-content>
                            <?php echo $item['value']; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
