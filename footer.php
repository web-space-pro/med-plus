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

	<footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="footer__contacts">
                    <h3 class="title">Контакты</h3>
                    <div>
                        <ul>
                            <li>
                                <span>Клиника</span>
                                Краснодар, улица Трамвайная, 15/1
                            </li>
                            <li>
                                <span>Клиника</span>
                                Краснодар, улица Трамвайная, 15/1
                            </li>
                            <li>
                                <span>Клиника</span>
                                Краснодар, улица Трамвайная, 15/1
                            </li>
                            <li>
                                <span>Клиника</span>
                                Краснодар, улица Трамвайная, 15/1
                            </li>
                            <li>
                                <span>Клиника</span>
                                Краснодар, улица Трамвайная, 15/1
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__menu">
                    <h3 class="title">Меню сайта</h3>
                    <nav class="" role="navigation">
                        <?php header_nav(); ?>
                    </nav>
                </div>
                <div class="footer__info">
                    <a class="logo" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" title="Home" aria-label="Home">
                       <img  width="187" height="48" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                    <div>Медицинские услуги предоставляются ООО «Клиника 112» </div>
                    <div>Адрес: 350049, Краснодар, улица Трамвайная, 15/1</div>
                    <div><strong>Лицензия № ЛО-23-01-014381 от 27.02.2020 г.ОГРН 1162375010203  ИНН 2311211375</strong></div>
                    <div>Все цены, предоставленные сайтом, не являются публичной офертой и имеют исключительно информационный характер.</div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="grid">
                    <div class="footer__copyright">
                        <p>&copy; <?= date('Y'); ?> Наркологическая клиника «Мед-Плюс»</p>
                    </div>
                    <div class="footer__develop">
                        <a href="#">Разработано в <span>wep-space.pro</span></a>
                    </div>
                </div>
            </div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
