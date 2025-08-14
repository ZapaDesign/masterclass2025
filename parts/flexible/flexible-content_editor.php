<?php

/**
 * @var array $args
 */

$content = get_sub_field('content');
$settings = get_sub_field('settings');
?>

<section class="flex-content-section">
    <div class="content-container">
        <?php if ($content): ?>
            <div class="editor">
                <?php echo $content; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
