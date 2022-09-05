<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pro-headphones-wp
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pro-headphones-wp' ); ?></a>

   <!-- NAVBAR -->
    <header>
        <div class="row">
            <div class="large-12 columns">
                <div class="top-bar">
                    <div class="top-bar-left">
                        <ul class="menu">
                            <li class="menu-text"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></li>
                            <li><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <form method="get" id="searchform" action="<?php bloginfo( 'url' ); ?>/">
                            <ul class="menu">
                                <li><input type="search" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="s" /></li>
                                <li><button class="button" type="submit" id="searchsubmit">Submit</button></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <section id="feature">
        <div class="row">
            <div class="large-12 columns">
                <img src="<?php bloginfo('template_directory'); ?>/images/headphones.jpeg" alt="headphones image">
            </div>
        </div>
    </section>
