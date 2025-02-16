<?php

    $title = get_sub_field('title');
    $accordion = get_sub_field('accordion');
    $show_tpl = get_sub_field('show_tpl');
?>

<?php if( $show_tpl ): ?>
    <?php include get_stylesheet_directory() . DIRECTORY_SEPARATOR . "g_parts" . DIRECTORY_SEPARATOR ."prices_services.php"; ?>
<?php else: ?>
    <?php if(!empty($accordion)): ?>
        <section class="tplPrice">
            <div class="container">
                <div class="tplPrice__title">
                    <?php if(!empty($title)) : ?>
                        <h2 class="title"><?=$title;?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="container-secondary">
                <div class="tplPrice__bg">
                    <?php if(!empty($accordion)) : ?>
                        <div class="accordion-group">
                            <?php foreach( $accordion as $key => $item ):?>
                                <div class="accordion">
                                    <details class="accordion__details" name="faq" <?=($key==0)? 'open' :''?>>
                                        <summary class="accordion__summary">
                                            <h4 class="accordion__title">
                                                <span role="term" aria-details="faq-<?=$key?>"><?=$item['heading']?></span>
                                                <span class="btn-icon"></span>
                                            </h4>
                                        </summary>
                                    </details>
                                    <div
                                            class="accordion__content"
                                            id="faq-<?=$key?>"
                                            role="definition"
                                    >
                                        <div class="accordion__content-inner">
                                            <div class="accordion__content-body">
                                                <?=$item['content']?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>


