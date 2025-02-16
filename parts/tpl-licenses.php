<?php
    $title = get_sub_field('title');
    $licenses = get_sub_field('licenses');

    $show_tpl = get_sub_field('show_tpl');
?>

<?php if( $show_tpl ): ?>
    <?php include get_stylesheet_directory() . DIRECTORY_SEPARATOR . "g_parts" . DIRECTORY_SEPARATOR ."licenses.php"; ?>
<?php else: ?>
    <?php if(!empty($licenses)): ?>
        <section class="tplLicenses">
            <div class="container">
                <div class="tplLicenses__wrap">
                    <div class="tplLicenses__heading">
                        <h3 class="tplLicenses__title"><?=$title?></h3>
                    </div>
                    <?php if(!empty($licenses)): ?>
                        <div class="tplLicenses__list pswp-gallery pswp-gallery--single-column" id="gallery">
                            <?php foreach ($licenses as $item): ?>
                                <?php
                                $text = $item['name'];
                                $maxLength = 35;
                                $trimmedText = mb_substr($text, 0, $maxLength) . (mb_strlen($text) > $maxLength ? "..." : "");
                                ?>
                                <div class="tplLicenses__item">
                                    <a href="<?=$item['img_preview']?>" data-pswp-width="400" data-pswp-height="590" data-pswp-srcset>
                                        <figure>
                                            <img data-pswp-srcset src="<?=$item['img_preview']?>" alt="<?=bloginfo();?>" width="100%" height="100%">
                                        </figure>
                                    </a>
                                    <?php if(!empty($trimmedText)): ?>
                                        <span class="title"><?=$trimmedText;?></span>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>