<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Med-Plus
 */

?>

<?php
if (function_exists('get_field')) {
    $h_contact = get_field('op_footer_header_contacts', 'options');
    $list_contact = get_field('op_fiiter_contacts_list', 'options');
    $h_menu = get_field('op_footer_header_menu', 'options');
    $description = get_field('op_footer_descriptions', 'options');
    $develop = get_field('op_footer_develop', 'options');
}
?>
	<footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="footer__contacts">
                    <?php if(!empty($h_contact)): ?>
                    <h3 class="title"><?=$h_contact;?></h3>
                    <?php endif; ?>
                    <div>
                        <?php if(!empty($list_contact)): ?>
                        <ul>
                            <?php foreach ($list_contact as $item): ?>
                            <li>
                                <span><?=$item['title'];?></span>
                                <?=$item['text'];?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="footer__menu">
                    <?php if(!empty($h_menu)): ?>
                        <h3 class="title"><?=$h_menu;?></h3>
                    <?php endif; ?>
                    <nav class="" role="navigation">
                        <?php footer_nav(); ?>
                    </nav>
                </div>
                <div class="footer__info">
                    <a class="logo" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" title="Home" aria-label="Home">
                       <img  width="187" height="48" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                    <?php if(!empty($description)): ?>
                       <?=$description;?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="grid">
                    <div class="footer__copyright">
                        <p>&copy; <?= date('Y'); ?> Наркологическая клиника «Мед-Плюс»</p>
                    </div>
                    <?php if(!empty($develop)): ?>
                        <div class="footer__develop">
                            <a href="<?=$develop['link']?>" target="_blank"><?=$develop['zagolovok']?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
	</footer>

<?php wp_footer(); ?>


</body>
</html>
