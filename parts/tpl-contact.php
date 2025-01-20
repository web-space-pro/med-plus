<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $subtitle  = get_sub_field('subtitle');
    $form  = get_sub_field('forma');
    $show_template = get_sub_field('show_tpl');
}
?>
<?php if( $show_template ): ?>
    <?php include get_stylesheet_directory() . DIRECTORY_SEPARATOR . "g_parts" . DIRECTORY_SEPARATOR ."callback-block.php"; ?>
<?php else: ?>
    <section id="#callback" class="tplContact">
        <div class="container-secondary">
            <div class="tplContact__bg">
                <div>
                    <?php if(!empty($title)) : ?>
                        <h2 class="title"><?=$title;?></h2>
                    <?php endif; ?>

                    <?php if(!empty($subtitle)) : ?>
                        <div class="subtitle"><?=$subtitle;?></div>
                    <?php endif; ?>
                </div>
                <?php if(!empty($form)) : ?>
                    <div>
                        <?= do_shortcode('[contact-form-7 id="'.$form.'"]'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
