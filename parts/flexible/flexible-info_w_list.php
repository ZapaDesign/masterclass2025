<?php
$content = get_sub_field('content');
$list = get_sub_field('list');
?>


<section class="fi">
    <div class="grid-container full">
        <div class="grid-x">
            <div class="cell small-12 medium-7">
                <section class="fi__content">
                    <div class="grid-x align-center">
                        <div class="cell small-12 medium-10">
                            <?php if($content) echo $content; ?>
                        </div>
                    </div>
                </section>
                <section class="fi__cell">
                    <header class="fi__cell-title">
                        <?php if ($header = $list['header']): ?>
                            <span><?php echo $header; ?></span>
                        <?php endif; ?>
                    </header>

                    <?php if ($list['list']): ?>
                        <ul class="grid-x align-center grid-margin-x grid-margin-y fi__list">
                            <?php foreach ($list['list'] as $item): ?>
                                <li class="cell small-12 medium-12 large-6 xlarge-2">
                                    <?php if ($image = $item['image']) {
                                        echo wp_get_attachment_image($image['id'], 'medium', false, [
                                            'class' => '',
                                            'alt' => $image['alt']
                                        ]);
                                    } ?>
                                    <?php if ($text = $item['text']): ?>
                                        <p><?php echo $text; ?></p>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <footer class="fi__cell-footer">
                        <?php if ($footer = $list['footer']): ?>
                            <?php echo $footer; ?>
                        <?php endif; ?>
                    </footer>
                </section>
            </div>
            <div class="cell small-12 medium-5 fi__img">
            </div>
        </div>
    </div>
</section>
