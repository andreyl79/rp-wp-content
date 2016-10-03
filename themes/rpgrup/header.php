<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="header-wrapper">
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
					<button id="menu-reveal" class="btn-menu float-left">Контакты</button>
					<div class="header__logo"></div>
					<button id="menu-main" class="btn-menu float-right">Меню</button>
					<div id="mobile-header-menu__contacts">
						<div class="close-button__block align-right">
							<button class="btn-close"><i class="fa fa-times" aria-hidden="true"></i></button>
						</div>
						<ul>
							<li>
								<a href="#">Россия, г.Самара, ул.Агибалова, 48</a>
							</li>
							<li>
								<a href="#">8 (546) 310-03-54</a>
							</li>
							<li>
								<a href="mailto:info@russproektgroup.com">info@russproektgroup.com</a>
							</li>
							<li>
							<a href="#" class="social-link facebook-link"><i class="fa fa-facebook-official"></i>	</a>
							<a href="#" class="social-link instagram-link"><i class="fa fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div id="mobile-header-menu__main">
						<div class="close-button__block align-left">
							<button class="btn-close"><i class="fa fa-times" aria-hidden="true"></i></button>
						</div>
						<div class="mobile-menu__wrapper">
							<?php wp_nav_menu(array(
								'theme_location'        =>  'mainmenu',
								'container'             =>  'nav',
								'menu_class'            =>  'mobile-main-nav'
							)); ?>
						</div>
					</div>
					<div id="main-menu">
						<?php wp_nav_menu(array(
							'theme_location'        =>  'singlemenu',
							'container'             =>  'nav',
							'menu_class'            =>  'main-nav'
						)); ?>
					</div>
				</div>
			</div>
		</div>
	</header>
