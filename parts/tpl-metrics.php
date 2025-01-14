<?php

    $metrics = get_sub_field('items');
?>

<?php if(!empty($metrics)): ?>
    <section class="tplMetrics">
        <div class="container">
            <div class="metrics">
                <div class="metrics__list">
                    <?php foreach( $metrics as $item ):?>
                        <div class="metrics__item animate-fill">
                            <div class="wrap">
                                <div class="metrics__icon">
                                    <img src="<?=$item['icon']?>" alt="alt" width="48px" height="48px">
                                </div>
                                <p class="metrics__title"><?=$item['title']?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
