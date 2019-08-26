<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karangtanjung
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'karangtanjung' ); ?></a>

	<header id="masthead" class="site-header">

		<section id="top">
			<div class="container text-white">
			Kecamatan Karang Tanjung - Kabupaten Pandeglang
			</div>
		</section>
		
		<nav class="navbar navbar-expand-md navbar-default" id="banner">
			<div class="container">
				<a class="navbar-brand" href="<?php echo site_url() ?>">
					<img id="imageLogo" class="navbar-brand-img" src="<?php echo get_template_directory_uri() . '/images/logo-karangtanjung.png' ?>" alt="Kecamatan Karang Tanjung - Kabupaten Pandeglang">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'navbar-nav ml-auto',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
				?>
			</div>
			
		</nav>
		<!-- #site-navigation -->
	</header><!-- #masthead -->