<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>

</head>
<body>
<div class="main-wrapper">
	<header class="header index">
		<div class="header__bg"></div>
		<div class="header__address-bar">
			<div class="container">
				<button id="menu-reveal" class="btn-menu float-left">Контакты</button>
				<button id="menu-main" class="btn-menu float-right">Меню</button>
				<div class="header__contacts">
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
						<a href="#" class="social-link facebook-link"><i class="fa fa-facebook-official"></i></a>
						<a href="#" class="social-link instagram-link"><i class="fa fa-instagram"></i></a>
					</li>
				</ul>
			</div>
			<div id="mobile-header-menu__main">
				<div class="close-button__block align-left">
					<button class="btn-close"><i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
				<ul>
					<li>
						<a href="#" class="menu-link--active">Главная</a>
					</li>
					<li>
						<a href="#">О нас</a>
					</li>
					<li>
						<a href="#">Проекты</a>
					</li>
					<li>
						<a href="#">Партнеры</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="header__top">
					<div class="header__menu">
						<?php wp_nav_menu(array(
							'theme_location'        =>  'mainmenu',
							'container'             =>  'nav',
							'menu_class'            =>  'main-nav'
						)); ?>
					</div>
				</div>
				<div class="header__center">
					<h1>РУСПРОЕКТГРУП</h1>
					<div class="logo"></div>
					<h1>РУССТРОЙГРУП</h1>
					<h3>проектирование строительство юридическое сопровождение</h3>
					<button type="submit" class="btn btn-header">задать вопрос</button>
				</div>
				<div class="header__bottom">
					<div class="header-partners-logos">
						<ul>
							<li class="partners-logos__list"><a class="partners__link" href="#"><img class="koshel" src="assets/partnr/logo_bw/kosh.png" alt="Samara Koshelev corporation"></a></li>
							<li class="partners-logos__list"><a class="partners__link" href="#"><img class="bazis" src="assets/partnr/logo_bw/bazis.png" alt="Samara MRSK Bazis"></a></li>
							<li class="partners-logos__list"><a class="partners__link" href="#"><img class="don" src="assets/partnr/logo_bw/don.png" alt="Samara Noviy Don"></a></li>
							<li class="partners-logos__list"><a class="partners__link" href="#"><img class="spectr" src="assets/partnr/logo_bw/spectr.png" alt="Samara Spectr Nedvizhimosti"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>