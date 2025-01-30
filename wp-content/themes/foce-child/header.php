<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="top-banner">
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <h1 class="site-title">
                    Fleurs d'oranger & chats errants
                </h1>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <ul>
                    <li class="logo">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Image logo en paralax.png'; ?>" alt="logo kakouki">
                    </li>
                    <li><a href="#story" class="link"><span>Histoire</span></a></li>
                    <li><a href="#characters" class="link"><span>Personnages</span></a></li>
                    <li><a href="#place" class="link"><span>Lieu</span></a></li>
                    <li><a href="#studio" class="link"><span>Studio Koukaki</span></a></li>
                    <li class="footer-item"><p>STUDIO KOUKAKI</p></li> <!-- Dernier élément avec une classe comme le footer -->
                </ul>
                   <!-- Images animées -->
                <div class="image-gauche">
                    <div class="Orchid"></div>
                    <div class="Kawaneko"></div>
                    <div class="flower"></div>
                    <div class="Orenjiiro"></div>
                </div>
                <div class="image-droite">
                    <div class="SunFlower"></div>
                    <div class="random_flower"></div>
                    <div class="Jaakuna"></div>
                    <div class="Hibiscus"></div>
                </div>
            </nav>
        </header>
    </div>
</div>
