<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BSDCommerce
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bsd-commerce' ); ?></a>

		<header class="header-wrapper">
			<div class="header-top">
				<div class="container">
					<div class="row align-items-center">
						<div class="col"> <i class="fa fa-edit"></i> <?php echo bloginfo('description'); ?> </div>
						<div class="col col-auto">
							<div class="top-nav">
								<?php if(has_nav_menu('top-nav')) :
								wp_nav_menu( array(
									'theme_location' => 'top-nav'
								) );
								endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="header-main">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<?php $bsd_custom_logo = get_theme_mod( 'custom_logo' ); if(!empty($bsd_custom_logo)) : the_custom_logo(); else : ?>
								<h2><?php echo bloginfo( 'name' ); ?></h2>
							<?php endif; ?>
						</div>
						<div class="col-lg-7">
							<div class="main-menu">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'main-nav',
									'menu_id'        => 'primary-menu',
								) );
								?>
							</div>
						</div>
						<div class="col-lg-2 text-right">
							<div class="header-right-icons">
								<span class="search-trigger"><i class="fa fa-search"></i></span>
								<a href="" class="cart-icon"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="content" class="site-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
