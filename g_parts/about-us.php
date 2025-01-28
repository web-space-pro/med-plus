<?php
$g_about_us = get_field('g_about_us', 'options');
$g_title = $g_about_us['title'];
$g_text  = $g_about_us['text'];
$g_link  = $g_about_us['link'];
$g_btn  = $g_about_us['knopka'];
$g_photo = $g_about_us['photo'];
$g_additional = $g_about_us['additional_text'];
$g_set_btn = $g_about_us['set_btn'];
?>

<section class="tpl-aboutUs">
    <div class="container-secondary">
        <div class="tpl-aboutUs__bg">
            <?php if(!empty($g_title)) : ?>
                <div class="tpl-aboutUs__header">
                    <h2 class="title"><?=$g_title;?></h2>
                </div>
            <?php endif; ?>
            <div class="flex">
                <div class="tpl-aboutUs__content">
                    <?php if(!empty($g_text)) : ?>
                        <div class="text">
                            <?=$g_text;?>
                        </div>
                    <?php endif; ?>

                    <?php if($g_set_btn['value'] == 'btn'): ?>
                        <a class="button button--bordered" href="<?=$g_link['url'];?>" data-toggle="tpl-aboutUs__additional" target="#" ><?=$g_btn;?></a>
                    <?php elseif($g_set_btn['value'] == 'link'): ?>
                        <?php if( isset($g_link) && !empty($g_link['url'])): ?>
                            <a class="button button--bordered" href="<?=$g_link['url'];?>" target="<?=$g_link['target'];?>" ><?=$g_link['title'];?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php if(!empty($g_photo)): ?>
                    <div class="tpl-aboutUs__image">
                        <div class="wrap">
                            <img src="<?=$g_photo?>" alt="<?= get_bloginfo(); ?>" width="100%" height="100%">
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(!empty($g_additional)): ?>
            <div class="tpl-aboutUs__additional hidden">
                <?=$g_additional;?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
