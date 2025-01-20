<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Med-Plus
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="singleSpecialist">
        <div class="singleSpecialist__header">
            <div class="wrap-title">
                <h1><?=the_title()?></h1>
                <?php if( have_rows('specialist') ): ?>
                    <?php while( have_rows('specialist') ): the_row(); ?>
                        <?php
                        if( get_row_layout() == 'specialist' ): ?>
                            <div class="experience"><?php echo the_sub_field('experience'); ?></div>
                            <div class="speciality"><?php echo the_sub_field('speciality'); ?></div>
                        <?php endif;
                    endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="wrap-image">
                <?php med_plus_post_thumbnail(); ?>
            </div>
        </div>
        <div class="gutenberg">
            <div class="wp-block-content">
                <?=get_the_content();?>
                <?php if ( 'post' === get_post_type() ) :?>
                    <div class="entry-meta">
                        <?php
                        med_plus_posted_on();
                        med_plus_posted_by();
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
