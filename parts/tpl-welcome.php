<?php

    $mark = get_sub_field('mark');
    $title = get_sub_field('title');
    $link = get_sub_field('link');
    $price = get_sub_field('price');
    $guaranteeList = get_sub_field('guarantee-list');
    $sliderBanner = get_sub_field('slider-banner');
    $metrics = get_sub_field('metrics');
    $show_map = get_sub_field('show_map');

?>
<section class="tplWelcome">
    <div class="tplWelcome__wrap">
        <div class="container">
            <div class="tplWelcome__flex">
                <div class="tplWelcome__heading">

                    <?php if(!empty($mark)): ?>
                    <span class="mark"><?=$mark?></span>
                    <?php endif; ?>
                    <h1><?=$title?></h1>

                    <?php if(!empty($link) || !empty($price)): ?>
                    <div class="infoBox">
                        <?php if(!empty($link)): ?>
                            <a href="<?=$link['url']?>" class="button btn button--accent"><?=$link['title']?></a>
                        <?php endif; ?>

                        <?php if(!empty($price)): ?>
                            <span class="mark-price"><?=$price?> ₽</span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if(!empty($guaranteeList)): ?>
                <div class="tplWelcome__list">
                    <ul class="guarantee-list">
                    <?php foreach( $guaranteeList as $item ):?>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13.8978 4.21875C13.9604 4.28125 14.023 4.375 13.9917 4.46875C13.9917 4.59375 13.9604 4.65625 13.8978 4.75L4.69519 13.9375C4.63259 14 4.56999 14 4.44478 14C4.35088 14 4.25697 14 4.19437 13.9375L0.0939039 9.8125C0.0313013 9.78125 0 9.6875 0 9.59375C0 9.46875 0.0313013 9.375 0.0939039 9.3125L0.97034 8.4375C1.03294 8.375 1.12685 8.34375 1.25205 8.34375C1.34596 8.34375 1.40856 8.375 1.47116 8.4375L4.44478 11.4062L12.5205 3.34375C12.5831 3.28125 12.6457 3.25 12.7396 3.25C12.8648 3.25 12.9587 3.28125 13.0213 3.34375L13.8978 4.21875ZM4.10047 7.9375L1.09555 4.90625C1.03294 4.84375 1.00164 4.75 1.00164 4.65625C1.00164 4.53125 1.03294 4.4375 1.09555 4.375L1.97198 3.5C2.06588 3.4375 2.15979 3.375 2.25369 3.375C2.3476 3.375 2.4415 3.4375 2.5041 3.5L4.38218 5.40625L9.6408 0.09375C9.7034 0.03125 9.7973 0 9.89121 0C10.0164 0 10.1103 0.03125 10.1729 0.09375L11.0494 1C11.112 1.0625 11.1746 1.15625 11.1746 1.25C11.1746 1.34375 11.112 1.4375 11.0494 1.53125L4.63259 7.9375C4.56999 8 4.50739 8 4.38218 8C4.28828 8 4.19437 8 4.10047 7.9375Z" fill="#999999" />
                            </svg>
                            <p><?=$item['value']?></p>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>

                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="tpl-contactInfo">
        <div class="container">
            <div class="wrap">
                <div class="cta-icon-block">
                    <div class="cta-icon-block--icon icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M15.1667 26.2296C9.08333 17.4881 8 16.5724 8 13.3255C8 8.91317 11.5417 5.33333 16 5.33333C20.4167 5.33333 24 8.91317 24 13.3255C24 16.5724 22.875 17.4881 16.7917 26.2296C16.4167 26.8124 15.5417 26.8124 15.1667 26.2296ZM16 16.6556C17.8333 16.6556 19.3333 15.1987 19.3333 13.3255C19.3333 11.494 17.8333 9.99545 16 9.99545C14.125 9.99545 12.6667 11.494 12.6667 13.3255C12.6667 15.1987 14.125 16.6556 16 16.6556Z" fill="#7297E0"></path>
                        </svg>
                    </div>
                    <div class="cta-icon-block--content">
                        <p class="title">Краснодар</p>
                        <span>Трамвайная 15/1</span>
                    </div>
                </div>

                <div class="cta-icon-block">
                    <div class="cta-icon-block--icon icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3335 8.38096C5.3335 7.57268 5.65458 6.79751 6.22612 6.22597C6.79766 5.65443 7.57284 5.33334 8.38111 5.33334H9.77489C10.6485 5.33334 11.4104 5.92865 11.6228 6.77588L12.7453 11.2691C12.8363 11.6328 12.8179 12.0152 12.6925 12.3685C12.5671 12.7218 12.3402 13.0302 12.0403 13.2551L10.7268 14.2405C10.5896 14.3431 10.5602 14.4935 10.5988 14.5981C11.1721 16.1573 12.0775 17.5733 13.2522 18.748C14.4269 19.9227 15.8429 20.8281 17.4021 21.4014C17.5067 21.44 17.656 21.4105 17.7597 21.2734L18.7451 19.9599C18.97 19.66 19.2784 19.4331 19.6317 19.3077C19.985 19.1823 20.3674 19.1639 20.7311 19.2549L25.2243 20.3774C26.0715 20.5897 26.6668 21.3516 26.6668 22.2263V23.6191C26.6668 24.4273 26.3457 25.2025 25.7742 25.774C25.2027 26.3456 24.4275 26.6667 23.6192 26.6667H21.3335C12.4974 26.6667 5.3335 19.5027 5.3335 10.6667V8.38096Z" fill="#7297E0" />
                        </svg>
                    </div>
                    <div class="cta-icon-block--content">
                        <a href="tel:+7 999 480 44 60" target="_self" class="title">+7 999 480 44 60</a>
                        <span>Работаем круглосуточно</span>
                    </div>
                </div>

                <div class="cta-icon-block">
                    <div class="cta-icon-block--icon icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M2 11.6946V22.7879C2 23.8166 2.42143 24.8032 3.17157 25.5306C3.92172 26.258 4.93913 26.6667 6 26.6667H26C27.0609 26.6667 28.0783 26.258 28.8284 25.5306C29.5786 24.8032 30 23.8166 30 22.7879V11.6946L18.096 18.7966C17.4657 19.1727 16.7401 19.3718 16 19.3718C15.2599 19.3718 14.5343 19.1727 13.904 18.7966L2 11.6946Z" fill="#7297E0" />
                            <path d="M30 9.41641V9.21213C30 8.18341 29.5786 7.19683 28.8284 6.46941C28.0783 5.742 27.0609 5.33334 26 5.33334H6C4.93913 5.33334 3.92172 5.742 3.17157 6.46941C2.42143 7.19683 2 8.18341 2 9.21213V9.41641L14.952 17.1455C15.2672 17.3336 15.63 17.4331 16 17.4331C16.37 17.4331 16.7328 17.3336 17.048 17.1455L30 9.41641Z" fill="#7297E0" />
                        </svg>
                    </div>
                    <div class="cta-icon-block--content">
                        <a class="title" href="mailto:info@med-plus-krasnodar.ru" target="_self">info@med-plus-krasnodar.ru</a>
                        <span>Работаем круглосуточно</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if($show_map): ?>
        <div class="tplMap">
            <div class="container-secondary">
                <div id="map"></div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(!empty($sliderBanner)): ?>
    <div class="tplBanner">
        <div class="container-secondary">
            <div class="swiper banner-slider">
                <div class="swiper-wrapper">
                    <?php foreach( $sliderBanner as $item ):?>
                    <div class="swiper-slide">
                        <img src="<?=$item?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if(!empty($metrics)): ?>
    <div class="tplMetrics">
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
    </div>
    <?php endif; ?>

</section>
