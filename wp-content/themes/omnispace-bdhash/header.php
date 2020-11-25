<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omnispace-bdhash
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<div class="o_container">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div >
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'omnispace-bdhash' ); ?></a>

	<header id="masthead" class="site-header o_header_container">
	<img src="<?php echo get_template_directory_uri(); ?>/images/hash_logo.jpg" alt="" class="o_header_logo">
	<div class="o_social_media_wrap">
		<ul>
			<li><i class="fa fa-facebook-square"></i></li>
			<li><i class="fa fa-flickr"></i></li>
		</ul>
	</div>
		<nav id="site-navigation" class="main-navigation o_navigation_wrapper">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'omnispace-bdhash' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
