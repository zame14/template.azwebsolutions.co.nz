<?php
$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
    <section id="top-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul>
                        <li class="ph"><a href="tel:<?=formatPhoneNumber(get_option('phone'))?>"><?=get_option('phone')?></a></li>
                        <li class="email"><a href="mailto:<?=get_option('email')?>"><?=get_option('email')?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="header">
        <a name="home"></a>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="logo-wrapper">
                        <?=the_custom_logo()?>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li class="hm"><a href="javascript:;"><span>Home</span></a></li>
                            <li class="about"><a href="#about"><span>About</span></a></li>
                            <li class="services"><a href="#services"><span>Services</span></a></li>
                            <li class="gallery"><a href="#gallery"><span>Gallery</span></a></li>
                            <li class="testimonials"><a href="#testimonials"><span>Testimonials</span></a></li>
                            <li class="contact"><a href="#contact"><span>Contact</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>