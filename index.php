<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="69d8c41f6fe14acb" />
    <title>Korobskix-web</title>
    <meta name="title" content="Мое портфолио">
    <meta name="description" content="Здесь вы сможете ознакомиться с моими работами и узнать больше обо мне">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://korobskix.ru/">
    <meta property="og:title" content="Мое портфолио">
    <meta property="og:description" content="Здесь вы сможете ознакомиться с моими работами и узнать больше обо мне">
    <meta property="og:image" content="<?php echo bloginfo('template_url'); ?>/assets/img/bg1-min.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://korobskix.ru/">
    <meta property="twitter:title" content="Мое портфолио">
    <meta property="twitter:description" content="Здесь вы сможете ознакомиться с моими работами и узнать больше обо мне">
    <meta property="twitter:image" content="<?php echo bloginfo('template_url'); ?>/assets/img/bg1-min.png">

    <!-- Favicon  -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo bloginfo('template_url'); ?>/assets/img/favicon//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="google-site-verification" content="fhwIxPtRIWCVimLrYjzWsyzOmUEalaqRYVVe_yKJmlQ" />
    <?php
        wp_head();
    ?>
</head>
<body>
    <aside class="sidepanel">
        Социальные сети
        <div class="sidepanel__line"></div>
        <a href="<?php the_field('contacts_link_1') ?>" class="github icon"><span class="icon-github"></span></a>
        <a href="<?php the_field('contacts_link_2') ?>" class="telegram icon"><span class="icon-telegram"></span></a>
        <a href="<?php the_field('contacts_link_3') ?>" class="whatsapp icon"><span class="icon-whatsapp"></span></a>
    </aside>
    <div class="hamburger">
        <div class="hamburger__elem"></div>
        <div class="hamburger__elem hamburger__elem_long"></div>
        <div class="hamburger__elem"></div>
    </div>
    <div class="menu">
       <div class="menu__block">
           <div class="menu__close">
                <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.1568 14.5231L28.4489 3.23075C29.1837 2.49623 29.1837 1.30861 28.4489 0.574085C27.7144 -0.160437 26.5267 -0.160437 25.7922 0.574085L14.4998 11.8665L3.20781 0.574085C2.47295 -0.160437 1.28567 -0.160437 0.551149 0.574085C-0.183717 1.30861 -0.183717 2.49623 0.551149 3.23075L11.8432 14.5231L0.551149 25.8155C-0.183717 26.55 -0.183717 27.7376 0.551149 28.4721C0.917206 28.8385 1.39852 29.0226 1.87948 29.0226C2.36045 29.0226 2.84141 28.8385 3.20781 28.4721L14.4998 17.1798L25.7922 28.4721C26.1586 28.8385 26.6396 29.0226 27.1205 29.0226C27.6015 29.0226 28.0825 28.8385 28.4489 28.4721C29.1837 27.7376 29.1837 26.55 28.4489 25.8155L17.1568 14.5231Z" fill="black"/>
                </svg>
           </div>
            <nav>
                <ul class="menu__list">
                    <li class="menu__link"><a href="<?php the_field('menu_link_1') ?>"><?php the_field('menu_text_1') ?></a></li>
                    <li class="menu__link"><a href="<?php the_field('menu_link_2') ?>"><?php the_field('menu_text_2') ?></a></li>
                    <li class="menu__link"><a href="<?php the_field('menu_link_3') ?>"><?php the_field('menu_text_3') ?></a></li>
                    <li class="menu__link"><a href="<?php the_field('menu_link_4') ?>"><?php the_field('menu_text_4') ?></a></li>
                    <li class="menu__link"><a href="<?php the_field('menu_link_5') ?>"><?php the_field('menu_text_5') ?></a></li>
                </ul>
            </nav>
            <div class="menu__social">
                <a href="<?php the_field('contacts_link_1') ?>" class="github icon"><span class="icon-github"></span></a>
                <a href="<?php the_field('contacts_link_2') ?>" class="telegram icon"><span class="icon-telegram"></span></a>
                <a href="<?php the_field('contacts_link_3') ?>" class="whatsapp icon"><span class="icon-whatsapp"></span></a>
            </div>
       </div> 
       <div class="menu__overlay"></div>
    </div>
    <section class="promo" id="promo" style="background:url(<?php the_field('bg_img') ?>) no-repeat 50%/cover;">
        <div class="container">
            <div class="subtitle"><?php the_field('my_name') ?></div>
            <h1 class="title title_mt9"><?php the_field('who_i') ?></h1>
                <a href="<?php the_field('link_1') ?>" class="promo__link"><button class="button"><?php the_field('promo_text-link_1') ?></button></a>
                <a href="<?php the_field('link_2') ?>" class="promo__link"><button  class="button button_transparent"><?php the_field('promo_text-link_2') ?></button></a>
            </div>
    </section>
    <section class="aboutme" id="aboutme">
       <div class="container">
           <div class="aboutme__cover">
                <div class="aboutme__foto">
                    <img src="<?php the_field('about-me_foto') ?>" alt="foto">
                </div>
                <div class="aboutme__wrapper">
                    <div class="aboutme__im">
                        <div class="subtitle subtitle_black"><?php the_field('about-me_title') ?></div>
                        <h2 class="title title_mt6 title_black"><?php the_field('about-me_name') ?></h2>
                        <div class="line line_left"></div>
                        <div class="aboutme__descr"><?php the_field('about-me_descr') ?></div>
                    </div>
                    <div class="descrblock">
                        <div class="descrblock__iconwrap">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0V20.5205H8.02402V21.9877H6.55742V23.4526H18.4425V21.9877H16.9759V20.5205H25V0H0ZM15.511 21.9877H9.48897V20.5205H15.511V21.9877H15.511ZM23.5351 19.0556H1.46489V16.1222H23.5351V19.0556H23.5351ZM23.5351 14.6573H1.46489V1.46494H23.5351V14.6573H23.5351Z" fill="black"/>
                            <path d="M9.95816 5.4134L8.92232 4.37756L5.23877 8.06111L8.92232 11.7446L9.95816 10.7088L7.31045 8.06111L9.95816 5.4134Z" fill="black"/>
                            <path d="M16.0777 4.37756L15.0419 5.4134L17.6896 8.06111L15.0419 10.7088L16.0777 11.7446L19.7612 8.06111L16.0777 4.37756Z" fill="black"/>
                            <path d="M12.6319 3.64405L10.9313 12.1931L12.3681 12.4789L14.0687 3.92986L12.6319 3.64405Z" fill="black"/>
                            </svg>
                        </div>
                        <div class="descrblock__textwrap">
                                <div class="descrblock__subtitle"><?php the_field('about-me_subtitle') ?></div>
                                <div class="descrblock__descr"><?php the_field('about-me_descr-2') ?></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>

    </section>
    <section class="benefit" id="benefit">
       <div class="container">
            <div class="subtitle subtitle_black subtitle_circle-center subtitle_center"><?php the_field('benefit_title') ?></div>
            <h2 class="title title_mt6 title_black title_center"><?php the_field('benefit_subtitle') ?></h2>
            <div class="line  line_top25"></div>
            <div class="benefit__wrapper">
                <div class="benefit__block">
                    <div class="benefit__title"><?php the_field('benefit_block-title-1') ?></div>
                    <div class="benefit__circle"></div>
                    <div class="benefit__longline"></div>
                    <div class="benefit__shortline"></div>
                    <div class="descrblock">
                        <div class="descrblock__iconwrap">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.92969 14.954L1.06509 14.5426C0.518604 15.6452 0 16.8837 0 18.3105C0 19.7101 0.497607 20.9336 1.06509 22.0785L7.37305 20.687V23.4312L9.57031 22.3325L11.7676 23.4312V20.6884L18.0263 22.0792C18.5686 20.9853 19.0918 19.7435 19.0918 18.3105C19.0918 18.0636 19.0735 17.8177 19.0428 17.5781H25V0H2.92969V14.954ZM1.90088 20.394C1.71035 19.8902 1.46484 19.0898 1.46484 18.3105C1.46484 17.5312 1.7104 16.7307 1.90088 16.227L7.37305 17.4342V19.1869L1.90088 20.394ZM10.3027 21.061L9.57031 20.6948L8.83789 21.061V17.5781H10.3027V21.061ZM17.1913 20.3931L11.7676 19.1878V17.4332L17.1913 16.2279C17.3817 16.7318 17.627 17.5317 17.627 18.3105C17.627 19.0895 17.3817 19.8895 17.1913 20.3931ZM23.5352 1.46484V16.1133H18.7038C18.4637 15.3788 18.2701 15.0319 18.0263 14.5418L10.9548 16.1133H8.18535L4.39453 15.277V1.46484H23.5352Z" fill="black"/>
                            <path d="M8.83789 2.92969H19.0918V4.39453H8.83789V2.92969Z" fill="black"/>
                            <path d="M5.85938 8.78906H22.0703V10.2539H5.85938V8.78906Z" fill="black"/>
                            <path d="M8.83789 11.7188H19.0918V13.1836H8.83789V11.7188Z" fill="black"/>
                            <path d="M10.3027 5.85938H11.7676V7.32422H10.3027V5.85938Z" fill="black"/>
                            <path d="M13.2324 5.85938H14.6973V7.32422H13.2324V5.85938Z" fill="black"/>
                            <path d="M16.1621 5.85938H17.627V7.32422H16.1621V5.85938Z" fill="black"/>
                            </svg>
                        </div>
                        <div class="descrblock__textwrap">
                            <div class="descrblock__subtitle"><?php the_field('benefit_block-subtitle_1') ?></div>
                            <div class="descrblock__info"><?php the_field('benefit_info_1') ?></div>
                            <div class="descrblock__descr descrblock__descr_left"><?php the_field('benefit_descr-1') ?></div>
                        </div>
                    </div>
                </div>
                <div class="benefit__block">
                    <div class="benefit__title"><?php the_field('benefit_block-title-2') ?></div>
                    <div class="benefit__circle"></div>
                    <div class="benefit__longline"></div>
                    <div class="benefit__shortline"></div>
                    <div class="descrblock">
                        <div class="descrblock__iconwrap">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5 3.75H11.25V4.58333H22.5V3.75Z" fill="black"/>
                            <path d="M18.3333 5.41663H11.25V6.24996H18.3333V5.41663Z" fill="black"/>
                            <path d="M18.3333 7.08337H11.25V7.91671H18.3333V7.08337Z" fill="black"/>
                            <path d="M22.5 2.08337H14.5833V2.91671H22.5V2.08337Z" fill="black"/>
                            <path d="M13.75 2.08337H12.9167V2.91671H13.75V2.08337Z" fill="black"/>
                            <path d="M12.9166 16.6666H12.0833V17.5H12.9166V16.6666Z" fill="black"/>
                            <path d="M6.96124 2.79461L6.37207 2.20544L5.53874 3.03878C5.37608 3.20149 5.37608 3.46524 5.53874 3.62794L6.37207 4.46128L6.96124 3.87211L6.42249 3.33336L6.96124 2.79461Z" fill="black"/>
                            <path d="M10.2946 3.03878L9.46124 2.20544L8.87207 2.79461L9.41082 3.33336L8.87207 3.87211L9.46124 4.46128L10.2946 3.62794C10.4572 3.46524 10.4572 3.20149 10.2946 3.03878Z" fill="black"/>
                            <path d="M7.93836 1.95109L7.10425 4.45105L7.89435 4.71467L8.72846 2.21471L7.93836 1.95109Z" fill="black"/>
                            <path d="M21.6667 12.9167V9.58333H20.8334V12.9167H20V8.75H19.1667V12.9167H18.3334V10.8333H17.5V12.9167H16.6667V10.4167H15.8334V12.9167H15V11.25H14.1667V12.9167H13.3334V13.75H22.5V12.9167H21.6667Z" fill="black"/>
                            <path d="M22.0834 0H2.91669C1.53653 0.00135417 0.418041 1.11984 0.416687 2.5V10.6775V10.6812V15.4167V16.6667C0.418041 18.0468 1.53653 19.1653 2.91669 19.1667H8.07585L6.40919 22.5H4.16669C3.47632 22.5 2.91669 23.0596 2.91669 23.75C2.91669 24.4404 3.47632 25 4.16669 25H20.8334C21.5237 25 22.0834 24.4404 22.0834 23.75C22.0834 23.0596 21.5237 22.5 20.8334 22.5H18.5909L16.9242 19.1667H22.0834C23.4635 19.1653 24.582 18.0468 24.5834 16.6667V2.5C24.582 1.11984 23.4635 0.00135417 22.0834 0ZM1.25002 5.8625L2.1971 6.99C2.27627 7.08432 2.39315 7.13875 2.51627 7.13875H3.79169C3.91481 7.13875 4.03169 7.08432 4.11085 6.99L5.05835 5.8625L5.99335 6.16625L6.09669 7.63417C6.10523 7.75693 6.16762 7.86964 6.2671 7.94208L7.29919 8.69208C7.39903 8.76417 7.52549 8.7887 7.64502 8.75917L9.07544 8.40375L9.65377 9.19917L8.87419 10.4492C8.8096 10.554 8.79466 10.6819 8.83335 10.7987L9.22794 12.0117C9.26591 12.1286 9.35356 12.2229 9.46752 12.2692L10.8334 12.8229V13.8062L9.46669 14.36C9.35247 14.406 9.26466 14.5006 9.2271 14.6179L9.1021 15H6.70169C7.63544 13.045 6.80752 10.7032 4.85252 9.76943C3.70424 9.22099 2.36122 9.26359 1.25002 9.88375V5.8625ZM1.25002 10.875C2.59773 9.82359 4.54262 10.0638 5.59398 11.4116C6.40575 12.4521 6.46841 13.8929 5.75002 15H1.25002V10.875ZM20.8334 23.3333C21.0635 23.3333 21.25 23.5199 21.25 23.75C21.25 23.9801 21.0635 24.1667 20.8334 24.1667H4.16669C3.93658 24.1667 3.75002 23.9801 3.75002 23.75C3.75002 23.5199 3.93658 23.3333 4.16669 23.3333H20.8334ZM17.6592 22.5H7.34085L9.00752 19.1667H15.9925L17.6592 22.5ZM23.75 16.6667C23.75 17.5871 23.0038 18.3333 22.0834 18.3333H2.91669C1.99622 18.3333 1.25002 17.5871 1.25002 16.6667V15.8333H5.96752H5.97127H23.75V16.6667ZM23.75 15H10.1063L11.4067 14.4729C11.5638 14.4092 11.6666 14.2566 11.6667 14.0871V12.5417C11.6667 12.372 11.5639 12.2192 11.4067 12.1554L9.95835 11.5696L9.68419 10.7258L10.51 9.40083C10.5996 9.25688 10.593 9.07302 10.4934 8.93583L9.58502 7.68583C9.48528 7.54849 9.31226 7.48536 9.14752 7.52625L7.63252 7.90125L6.91669 7.38125L6.8071 5.82708C6.79518 5.65766 6.68158 5.5124 6.52002 5.46L5.05127 4.9825C4.88966 4.93104 4.71299 4.98182 4.60335 5.11125L3.60044 6.305H2.71169L1.70835 5.11125C1.59867 4.98167 1.42174 4.93083 1.26002 4.9825L1.25002 4.98625V2.5C1.25002 1.57953 1.99622 0.833333 2.91669 0.833333H22.0834C23.0038 0.833333 23.75 1.57953 23.75 2.5V15Z" fill="black"/>
                            </svg>
                        </div>
                        <div class="descrblock__textwrap">
                            <div class="descrblock__subtitle"><?php the_field('benefit_block-subtitle_1') ?></div>
                            <div class="descrblock__descr descrblock__descr_left descrblock__descr_top25"><?php the_field('benefit_descr-2') ?></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>
    <section class="skills" id="skills" style="background:url(<?php the_field('skills_bg') ?>) center center/cover no-repeat;">
        <div class="container">
            <div class="subtitle subtitle_nonecircle subtitle_center"><?php the_field('skills_title') ?></div>
            <h2 class="title title_center"><?php the_field('skills_subtitle') ?></h2>
            <div class="line line_top25"></div>
            <div class="skills__wrapper">
                <?php
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'my_skills',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, 
                    ) );
                    
                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="skills__block">
                                <div class="skills__logo">
                                    <img src="<?php the_field('skills_tool') ?>" alt="icon">    
                                </div>
                                    
                                <div class="skills__name"><?php the_field('skills_tool-name') ?></div>
                                <div class="skills__descr"><?php the_field('skills_descr') ?></div>
                            </div>
                        <?php
                        // формат вывода the_title() ...
                    }
                    
                    wp_reset_postdata(); // сброс
                ?>
                
            </div>
        </div>
    </section>
    <section class="scales">
       <div class="container">
           <div class="scales__block">
               <div class="scales__wrapper">
                    <h3 class="subtitle subtitle_black"><?php the_field('scale_title_1') ?></h3>
                    <div class="scales__persent"><?php the_field('scales_percent_1') ?></div>
               </div>
               <div class="scales__scale">
                   <span class="scales__inside-scales"></span>
               </div>
           </div>
           <div class="scales__block">
                <div class="scales__wrapper">
                    <h3 class="subtitle subtitle_black"><?php the_field('scale_title_2') ?></h3>
                    <div class="scales__persent"><?php the_field('scales_percent_2') ?></div>
                </div>
                <div class="scales__scale">
                    <span class="scales__inside-scales"></span>
                </div>
            </div>
            <div class="scales__block">
                <div class="scales__wrapper">
                     <h3 class="subtitle subtitle_black"><?php the_field('scale_title_3') ?></h3>
                     <div class="scales__persent"><?php the_field('scales_percent_3') ?></div>
                </div>
                <div class="scales__scale">
                    <span class="scales__inside-scales" ></span>
                </div>
            </div>
            <div class="scales__block">
                <div class="scales__wrapper">
                     <h3 class="subtitle subtitle_black"><?php the_field('scale_title_4') ?></h3>
                     <div class="scales__persent"><?php the_field('scales_percent_4') ?></div>
                </div>
                <div class="scales__scale">
                    <span class="scales__inside-scales"></span>
                </div>
            </div>
       </div> 
    </section>
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h3 class="subtitle subtitle_center subtitle_circle-center subtitle_black"><?php the_field('portfolio_title') ?></h3>
            <div class="title title_center title_black"><?php the_field('portfolio_subtitle') ?></div>
            <div class="line"></div>
            <div class="portfolio__wrapper">
                <?php
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'my_portfolio',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    
                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="portfolio__item" id="plans"><a href="<?php the_field('portfolio_link') ?>">
                                <picture>
                                    <source media="(max-width:1200px)" srcset="<?php the_field('portfolio_add-img') ?>">
                                    <source media="(min-width:1201)" srcset="<?php the_field('portfolio_img') ?>">
                                    <img src="<?php the_field('portfolio_img') ?>">
                                </picture>
                            </a></div>
                        <?php
                    }
                    
                    wp_reset_postdata(); // сброс
                ?>

            </div>
        </div>
    </section>
    <section class="contacts" id="contacts">
        <div class="container">
            <h3 class="subtitle subtitle_black"><?php the_field('contacts_title') ?></h3>
            <div class="title title_black title_mt6"><?php the_field('contacts_subtitle') ?></div>
            <div class="line line_left"></div>
            <div class="contacts__descr"><?php the_field('contacts_descr_1') ?></div>
            <div class="contacts__wrapper">
                <a href="<?php the_field('contacts_link_1') ?>" class="github icon"><span class="icon-github"></span></a>
                <a href="<?php the_field('contacts_link_2') ?>" class="telegram icon"><span class="icon-telegram"></span></a>
                <a href="<?php the_field('contacts_link_3') ?>" class="whatsapp icon"><span class="icon-whatsapp"></span></a>
            </div>
            <div class="contacts__descr"><?php the_field('contacts_descr_2') ?></div>
            <div class="contacts__form">
                <?php echo do_shortcode( '[contact-form-7 id="5" title="Форма korobskix.ru"]' ) ?>
            </div>
        </div>
    </section>
    <a href="#promo" class="arrow-up">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/arrow-up2.svg" alt="arrow-up" >
    </a>
    
    <?php
        wp_footer();
    ?>
</body>
</html>