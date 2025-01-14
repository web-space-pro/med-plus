<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Med-Plus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php wp_head(); ?>

    <?php
    if (function_exists('get_field')) {
        $location = get_field('op_header_location', 'options');
        $contact = get_field('op_header_contact', 'options');
        $cta_btn = get_field('op_header_cta_buttun', 'options');
    }
    ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="header__top">
        <div class="header__top-inner container">
            <a class="header__logo logo" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" title="Home" aria-label="Home">
                <div class="flex items-center">
                    <img  width="187" height="48" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="<?php bloginfo('name'); ?>">
                </div>
            </a>
            <div class="header__contacts">
                <div class="header__contacts-wrap">
                    <?php if(!empty($location)): ?>
                    <div class="cta-icon-block">
                        <div class="cta-icon-block--icon icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M15.1667 26.2296C9.08333 17.4881 8 16.5724 8 13.3255C8 8.91317 11.5417 5.33333 16 5.33333C20.4167 5.33333 24 8.91317 24 13.3255C24 16.5724 22.875 17.4881 16.7917 26.2296C16.4167 26.8124 15.5417 26.8124 15.1667 26.2296ZM16 16.6556C17.8333 16.6556 19.3333 15.1987 19.3333 13.3255C19.3333 11.494 17.8333 9.99545 16 9.99545C14.125 9.99545 12.6667 11.494 12.6667 13.3255C12.6667 15.1987 14.125 16.6556 16 16.6556Z" fill="#7297E0" />
                            </svg>
                        </div>
                        <div class="cta-icon-block--content">
                            <p class="title"><?=$location['label']?></p>
                            <span><?=$location['text']?></span>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty($contact)): ?>
                    <div class="cta-icon-block">
                        <div class="cta-icon-block--icon icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.33325 8.38095C5.33325 7.57267 5.65434 6.7975 6.22588 6.22596C6.79742 5.65442 7.57259 5.33333 8.38087 5.33333H9.77465C10.6483 5.33333 11.4102 5.92863 11.6225 6.77587L12.7451 11.2691C12.836 11.6328 12.8177 12.0152 12.6922 12.3685C12.5668 12.7218 12.34 13.0302 12.04 13.2551L10.7265 14.2405C10.5894 14.3431 10.5599 14.4935 10.5985 14.5981C11.1719 16.1573 12.0772 17.5733 13.2519 18.748C14.4266 19.9227 15.8426 20.8281 17.4018 21.4014C17.5065 21.44 17.6558 21.4105 17.7594 21.2734L18.7448 19.9599C18.9697 19.66 19.2782 19.4331 19.6314 19.3077C19.9847 19.1823 20.3672 19.1639 20.7308 19.2549L25.224 20.3774C26.0713 20.5897 26.6666 21.3516 26.6666 22.2263V23.619C26.6666 24.4273 26.3455 25.2025 25.774 25.774C25.2024 26.3456 24.4272 26.6667 23.619 26.6667H21.3333C12.4972 26.6667 5.33325 19.5027 5.33325 10.6667V8.38095Z" fill="#7297E0" />
                            </svg>
                        </div>
                        <div class="cta-icon-block--content">
                            <a class="title" href="tel:<?=$contact['label']?>" target="_blank"><?=$contact['label']?></a>
                            <span><?=$contact['text']?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(!empty($cta_btn)): ?>
            <a class="header__order button button--bordered" href="<?=$cta_btn['url']?>" target="_self">
                <?=$cta_btn['title']?>
            </a>
            <?php endif; ?>
            <div class="header__right">
                <div class="cta-icon-block">
                    <div class="cta-icon-block--icon icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.33325 8.38095C5.33325 7.57267 5.65434 6.7975 6.22588 6.22596C6.79742 5.65442 7.57259 5.33333 8.38087 5.33333H9.77465C10.6483 5.33333 11.4102 5.92863 11.6225 6.77587L12.7451 11.2691C12.836 11.6328 12.8177 12.0152 12.6922 12.3685C12.5668 12.7218 12.34 13.0302 12.04 13.2551L10.7265 14.2405C10.5894 14.3431 10.5599 14.4935 10.5985 14.5981C11.1719 16.1573 12.0772 17.5733 13.2519 18.748C14.4266 19.9227 15.8426 20.8281 17.4018 21.4014C17.5065 21.44 17.6558 21.4105 17.7594 21.2734L18.7448 19.9599C18.9697 19.66 19.2782 19.4331 19.6314 19.3077C19.9847 19.1823 20.3672 19.1639 20.7308 19.2549L25.224 20.3774C26.0713 20.5897 26.6666 21.3516 26.6666 22.2263V23.619C26.6666 24.4273 26.3455 25.2025 25.774 25.774C25.2024 26.3456 24.4272 26.6667 23.619 26.6667H21.3333C12.4972 26.6667 5.33325 19.5027 5.33325 10.6667V8.38095Z" fill="#7297E0" />
                        </svg>
                    </div>
                    <?php if(!empty($contact)): ?>
                        <div class="cta-icon-block">
                            <div class="cta-icon-block--icon icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.33325 8.38095C5.33325 7.57267 5.65434 6.7975 6.22588 6.22596C6.79742 5.65442 7.57259 5.33333 8.38087 5.33333H9.77465C10.6483 5.33333 11.4102 5.92863 11.6225 6.77587L12.7451 11.2691C12.836 11.6328 12.8177 12.0152 12.6922 12.3685C12.5668 12.7218 12.34 13.0302 12.04 13.2551L10.7265 14.2405C10.5894 14.3431 10.5599 14.4935 10.5985 14.5981C11.1719 16.1573 12.0772 17.5733 13.2519 18.748C14.4266 19.9227 15.8426 20.8281 17.4018 21.4014C17.5065 21.44 17.6558 21.4105 17.7594 21.2734L18.7448 19.9599C18.9697 19.66 19.2782 19.4331 19.6314 19.3077C19.9847 19.1823 20.3672 19.1639 20.7308 19.2549L25.224 20.3774C26.0713 20.5897 26.6666 21.3516 26.6666 22.2263V23.619C26.6666 24.4273 26.3455 25.2025 25.774 25.774C25.2024 26.3456 24.4272 26.6667 23.619 26.6667H21.3333C12.4972 26.6667 5.33325 19.5027 5.33325 10.6667V8.38095Z" fill="#7297E0" />
                                </svg>
                            </div>
                            <div class="cta-icon-block--content">
                                <a class="title" href="tel:<?=$contact['label']?>" target="_blank"><?=$contact['label']?></a>
                                <span><?=$contact['title']?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="visible-mobile">
                    <svg class="btn-menu" viewBox="0 0 100 100">
                        <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                        <path class="line middle" d="m 30,50 h 40" />
                        <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="header__menu">
        <div class="container">
            <nav  role="navigation">
                <?php header_nav(); ?>
            </nav>
        </div>
    </div>
</header>

<div class="mobileMenu">
    <div class="mobileMenu__wrapper">
        <nav class="mobileMenu__menu" role="navigation">
            <?php header_nav(); ?>
        </nav>
        <div class="mobileMenu__contacts">
            <?php if(!empty($location)): ?>
                <div class="cta-icon-block">
                    <div class="cta-icon-block--icon icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M15.1667 26.2296C9.08333 17.4881 8 16.5724 8 13.3255C8 8.91317 11.5417 5.33333 16 5.33333C20.4167 5.33333 24 8.91317 24 13.3255C24 16.5724 22.875 17.4881 16.7917 26.2296C16.4167 26.8124 15.5417 26.8124 15.1667 26.2296ZM16 16.6556C17.8333 16.6556 19.3333 15.1987 19.3333 13.3255C19.3333 11.494 17.8333 9.99545 16 9.99545C14.125 9.99545 12.6667 11.494 12.6667 13.3255C12.6667 15.1987 14.125 16.6556 16 16.6556Z" fill="#7297E0" />
                        </svg>
                    </div>
                    <div class="cta-icon-block--content">
                        <p class="title"><?=$location['label']?></p>
                        <span><?=$location['text']?></span>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(!empty($contact)): ?>
                <div class="cta-icon-block">
                    <div class="cta-icon-block--icon icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.33325 8.38095C5.33325 7.57267 5.65434 6.7975 6.22588 6.22596C6.79742 5.65442 7.57259 5.33333 8.38087 5.33333H9.77465C10.6483 5.33333 11.4102 5.92863 11.6225 6.77587L12.7451 11.2691C12.836 11.6328 12.8177 12.0152 12.6922 12.3685C12.5668 12.7218 12.34 13.0302 12.04 13.2551L10.7265 14.2405C10.5894 14.3431 10.5599 14.4935 10.5985 14.5981C11.1719 16.1573 12.0772 17.5733 13.2519 18.748C14.4266 19.9227 15.8426 20.8281 17.4018 21.4014C17.5065 21.44 17.6558 21.4105 17.7594 21.2734L18.7448 19.9599C18.9697 19.66 19.2782 19.4331 19.6314 19.3077C19.9847 19.1823 20.3672 19.1639 20.7308 19.2549L25.224 20.3774C26.0713 20.5897 26.6666 21.3516 26.6666 22.2263V23.619C26.6666 24.4273 26.3455 25.2025 25.774 25.774C25.2024 26.3456 24.4272 26.6667 23.619 26.6667H21.3333C12.4972 26.6667 5.33325 19.5027 5.33325 10.6667V8.38095Z" fill="#7297E0" />
                        </svg>
                    </div>
                    <div class="cta-icon-block--content">
                        <a class="title" href="tel:<?=$contact['label']?>" target="_blank"><?=$contact['label']?></a>
                        <span><?=$contact['text']?></span>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="mobileMenu__cta">
            <?php if(!empty($cta_btn)): ?>
                <a class="header__order button button--bordered" href="<?=$cta_btn['url']?>" target="_self">
                    <?=$cta_btn['title']?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
