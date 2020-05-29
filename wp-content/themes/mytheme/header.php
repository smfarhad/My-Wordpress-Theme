<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Caveat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="top-menu-bar">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<?php
							wp_nav_menu(
								array(
									'menu' => 'Top Menu',
								)
							);
							?>
						</div>
						<div class="col-6">
							<?php
							dynamic_sidebar('header');
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="site-branding">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php show_easylogo(); ?>
					</a>
					<?php
					$mytheme_description = get_bloginfo('description', 'display');
					if ($mytheme_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $mytheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-light main-navigation">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
						<?php esc_html_e('Primary Nav', 'mytheme'); ?>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div><!-- Container  -->
		</header><!-- #masthead -->
		<div class="container">