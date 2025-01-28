<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $link  = get_sub_field('link');
    $persons = get_sub_field('list');
}
?>
<section id="specialist" class="tplSpecialist">
    <div class="container">
        <div class="tplSpecialist__heading">
            <?php if(!empty($title)) : ?>
                <h2 class="title"><?=$title;?></h2>
            <?php endif; ?>
            <?php if( isset($link) && !empty($link['url'])): ?>
                <a class="link-icon" data-toggle="hidden-content" href="<?=$link['url'];?>" target="<?=$link['target'];?>" ><?=$link['title'];?></a>
            <?php endif; ?>
        </div>
        <?php if (!empty($persons)) : ?>
        <div class="tplSpecialist__loop">
            <?php foreach ($persons as $key=> $person):?>
                <figure class="specialist__card <?=($key >=4 ) ? 'hidden hidden-content':''?>">
                    <?php //var_dump($person);?>
                    <div class="relative">
                        <div class="specialist__photo">
                            <?= get_the_post_thumbnail($person->ID);?>
                        </div>
                        <?php if( have_rows('specialist', $person->ID) ): ?>
                                <?php while( have_rows('specialist', $person->ID) ): the_row(); ?>
                                    <?php
                                    if( get_row_layout() == 'specialist' ): ?>
                                        <div class="specialist__experience"><?php echo the_sub_field('experience'); ?></div>
                                    <?php endif;
                                endwhile; ?>
                            <?php endif; ?>

                    </div>
                    <div class="specialist__author">
                            <h3> <?=get_the_title($person->ID)?></h3>
                        </div>
                    <?php if( have_rows('specialist', $person->ID) ): ?>
                            <?php while( have_rows('specialist', $person->ID) ): the_row(); ?>
                                <?php
                                if( get_row_layout() == 'specialist' ): ?>
                                    <p class="specialist__speciality"><?php echo the_sub_field('speciality'); ?></p>
                                <?php endif;
                            endwhile; ?>
                        <?php endif; ?>
                </figure>
            <?php endforeach; else:
                echo '<p>Других  специалистов в этой категории пока нет.</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
