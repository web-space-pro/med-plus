<?php
    $show = get_sub_field('show');
?>

<?php if($show): ?>
    <section class="tplContent">
        <div class="container">
            <div class="tplContent__text">
                <h2><?=get_the_title();?></h2>
                <div class="wp-block-content">
                    <?=get_the_content();?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
