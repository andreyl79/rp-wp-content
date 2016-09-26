<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div id="main-wrapper">
			<div class="header__contacts">
				<div class="container">
					<div class="header-address__phone">
						<i class="fa fa-phone"></i>
						<span class="phone__number">8 (546) 310-03-54</span>
					</div>
					<div class="header-address__street">
						<span class="street">Россия, г.Самара, ул.Агибалова, 48</span>
					</div>
					<div class="header-address-email">
						<i class="fa fa-envelope-o"></i>
						<span class="email-address__link"><a href="mailto:info@russproektgroup.com">info@russproektgroup.com</a></span>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="container">
					<div class="header__logo"></div>
					<div id="main-menu">
						<?php wp_nav_menu(array(
							'theme_location'        =>  'mainmenu',
							'container'             =>  'nav',
							'menu_class'            =>  'main-nav'
						)); ?>
					</div>
				</div>
			</div>
		</div>
	</header>
