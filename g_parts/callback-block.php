<?php
$g_callback = get_field('g_contact_block', 'options');

$g_title = $g_callback['title'];
$g_subtitle = $g_callback['subtitle'];
$g_form = $g_callback['forma'];
?>
<section id="#callback" class="tplContact">
    <div class="container-secondary">
        <div class="tplContact__bg">
            <div>
                <?php if(!empty($g_title)) : ?>
                    <h2 class="title"><?=$g_title;?></h2>
                <?php endif; ?>

                <?php if(!empty($g_subtitle)) : ?>
                    <div class="subtitle"><?=$g_subtitle;?></div>
                <?php endif; ?>
            </div>
            <?php if(!empty($g_form)) : ?>
                <div>
                    <?= do_shortcode('[contact-form-7 id="'.$g_form.'"]'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
