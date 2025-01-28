<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
    $link  = get_sub_field('link');
    $btn  = get_sub_field('knopka');
    $photo = get_sub_field('photo');
    $additional = get_sub_field('additional_text');
    $set_btn = get_sub_field('set_btn');

    $show_template = get_sub_field('show_custom_template');
}
?>
<?php if( $show_template ): ?>
    <?php include get_stylesheet_directory() . DIRECTORY_SEPARATOR . "g_parts" . DIRECTORY_SEPARATOR ."about-us.php"; ?>
<?php else: ?>
    <section class="tpl-aboutUs">
        <div class="container-secondary">
            <div class="tpl-aboutUs__bg">
                <?php if(!empty($title)) : ?>
                    <div class="tpl-aboutUs__header">
                        <h2 class="title"><?=$title;?></h2>
                    </div>
                <?php endif; ?>
                <div class="flex">
                    <div class="tpl-aboutUs__content">
                        <?php if(!empty($text)) : ?>
                            <div class="text">
                                <?=$text;?>
                            </div>
                        <?php endif; ?>

                        <?php if($set_btn['value'] == 'btn'): ?>
                            <a class="button button--bordered" href="<?=$link['url'];?>" data-toggle="tpl-aboutUs__additional" target="#" ><?=$btn;?></a>
                        <?php elseif($set_btn['value'] == 'link'): ?>
                            <?php if( isset($link) && !empty($link['url'])): ?>
                                <a class="button button--bordered" href="<?=$link['url'];?>" target="<?=$link['target'];?>" ><?=$link['title'];?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <?php if(!empty($photo)): ?>
                        <div class="tpl-aboutUs__image">
                            <div class="wrap">
                                <img src="<?=$photo?>" alt="<?= get_bloginfo(); ?>" width="100%" height="100%">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if(!empty($additional)): ?>
                    <div class="tpl-aboutUs__additional hidden">
                        <?=$additional;?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
