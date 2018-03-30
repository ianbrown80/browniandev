<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 * @package browniandev
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">
	
	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'browniandev' ); ?></a>

		<nav class="navbar navbar-expand-md">

			<div class="container">

				<div id="navbarNavDropDown-left" class="collapse navbar-collapse">

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary_nav_left',
						'menu_class'      => 'navbar-nav navbar-nav-left',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu-left',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

				</div>
		
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-reorder"></span>
				</button>

				<div id="navbarNavDropDown-right" class="collapse navbar-collapse">

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary_nav_right',
						'menu_class'      => 'navbar-nav-right navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu-right',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

				</div><!-- #NavBarDropDown -->

			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
