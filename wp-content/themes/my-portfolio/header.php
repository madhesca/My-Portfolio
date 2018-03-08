<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" >
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >


		<!-- navigation and background -->
		<div class="wrapper">

			<h2 class="wrapper__title">Computer Ads</h2>
			<p class="wrapper__subtitle">The Ad of the century where magic happens</p>

			<div class="nav">
				

				<div class="logo">
			
					<a href="<?php echo site_url(); ?>">m<span class="site-header__logo--art"><em><strong>A</strong>rt</em></span>on<strong><em> C</em></strong>reatives</a>
				</div>

					<div class="menu">

					<?php wp_nav_menu(array(

						'theme_location' => 'headerNav'

					)); ?>

					
					</div>
				</div>

			
			</div>
		
