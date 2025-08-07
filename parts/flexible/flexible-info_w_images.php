<?php
$header = get_sub_field('header');
$left = get_sub_field('left');
$right = get_sub_field('right');
$footer = get_sub_field('footer');
?>


<section class="si flex-sec info-w-img">
    <div class="si__title">
        <?php if ($header): ?>
            <?php echo $header; ?>
        <?php endif; ?>
    </div>
    <section class="si__section si__section--first">
        <div bp-layout="row">
            <div bp-layout="col 8@lg 6@xl offset-1@xl" class="si__text">
                <?php if ($left['content']): ?>
                    <?php echo $left['content']; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="si__section si__section--second">
        <div bp-layout="row">
            <div bp-layout="col 6@lg 6@xl" class="si__bgimg">
            </div>
            <div bp-layout="col 6@lg 5@xl" class="si__text">
                <?php if ($right['content']): ?>
                    <?php echo $right['content']; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section bp-layout="row center">
        <div bp-layout="col 8@lg 6@xl" class="si__section--3rd">
            <?php if ($footer): ?>
                <?php echo $footer; ?>
            <?php endif; ?>
        </div>
    </section>
</section>