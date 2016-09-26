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
<div id="frontpage-wrapper">
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
					<div id="frontpage__header-menu">
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
							<li class="partners-logos__list"><a class="partners__link" href="#"><img class="koshel" src="<?php echo get_template_directory_uri(); ?>/assets/partnr/logo_bw/kosh.png" alt="Samara Koshelev corporation"></a></li>
							<li class="partners-logos__list"><a class="partners__link" href="#"><img class="bazis" src="<?php echo get_template_directory_uri(); ?>/assets/partnr/logo_bw/bazis.png" alt="Samara MRSK Bazis"></a></li>
							<li class="partners-logos__list"><a class="partners__link" href="#"><img class="don" src="<?php echo get_template_directory_uri(); ?>/assets/partnr/logo_bw/don.png" alt="Samara Noviy Don"></a></li>
							<li class="partners-logos__list"><a class="partners__link" href="#"><img class="spectr" src="<?php echo get_template_directory_uri(); ?>/assets/partnr/logo_bw/spectr.png" alt="Samara Spectr Nedvizhimosti"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<body>
		<section class="about">
			<div class="container">
				<h1 id="about-start" class="section-header">О компании</h1>
				<div class="section-content">
					<p>ООО «Руспроектгруп» с 2010 года является крупной архитектурно-проектной
						организацией, за прошедшие 6,5 лет нашей организацией было выполнено
						большое количество объектов различных назначений:</p>
					<p><a class="abou__link" href="#">Список объектов</a></p>
					<p>Наша организация имеет лицензию на выполнение всех видов проектирования, а также оказывает широкий спектр профильных услуг, среди которых можно выделить:</p>
					<ul>
						<li>Комплексное проектирование зданий и сооружений</li>
						<li>Получение разрешительной документации</li>
						<li>Строительство зданий и сооружений</li>
						<li>Монтаж внутренних инженерных систем</li>
						<li>Системы охранно-пожарной безопасности</li>
						<li>Авторский надзор за строительством объектов</li>
					</ul>
					<p>В нашей организации работают высококвалифицированные специалисты, имеющие большой опыт в области проектирования. При разработке проектнойдокументации соблюдаются самые высокие требования заказчика по безопасности, возможности быстрого возведения и удобства объекта, его архитектурной неповторимости, а также рациональности использования имеющегося земельного участка. Штат нашей организации постоянно растет в связи с увеличением портфеля заказов. Большинство сотрудников до прихода в «Руспроектгруп» уже работали в сфере проектирования и строительства, тем самым, обеспечивается высокий уровень профессионализма и качества выполняемых работ.</p>
					<p>Мы ставим на первый план именно индивидуальный подход к каждому клиенту.</p>
					<p class="more"></p>
				</div>
				<button class="btn-readmore readmore-open ">подробней</button>
				<button class="btn-readmore readmore-close">свернуть</button>
			</div>
		</section>
		<section class="projects">
			<div class="container">
				<h1 class="section-header">Проекты</h1>
				<div class="section-content">
					<div class="projects-items">
						<div class="item__container">
							<div class="item">
								<div class="item__content a--1x1">
									<div class="item-content__img a--fixed">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/projects/1.jpg" alt="test">
									</div>
									<div class="item-descr">
										<p class="short-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores distinctio doloremque, eius eos est excepturi iste, maiores pariatur quam recusandae saepe similique, tempora temporibus ullam voluptatem. Distinctio eos officia quod.</p>
										<button class="btn-projects-readmore">Подробней</button>
									</div>
								</div>
							</div>
						</div>
						<div class="item__container">
							<div class="item">
								<div class="item__content a--1x1">
									<div class="item-content__img a--fixed">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/projects/2.jpg" alt="test">
									</div>
									<div class="item-descr">
										<p class="short-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores distinctio doloremque, eius eos est excepturi iste, maiores pariatur quam recusandae saepe similique, tempora temporibus ullam voluptatem. Distinctio eos officia quod.</p>
										<button class="btn-projects-readmore">Подробней</button>
									</div>
								</div>
							</div>
						</div>
						<div class="item__container">
							<div class="item">
								<div class="item__content a--1x1">
									<div class="item-content__img a--fixed">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/projects/3.jpg" alt="test">
									</div>
									<div class="item-descr">
										<p class="short-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores distinctio doloremque, eius eos est excepturi iste, maiores pariatur quam recusandae saepe similique, tempora temporibus ullam voluptatem. Distinctio eos officia quod.</p>
										<button class="btn-projects-readmore">Подробней</button>
									</div>
								</div>
							</div>
						</div>
						<div class="item__container">
							<div class="item">
								<div class="item__content a--1x1">
									<div class="item-content__img a--fixed">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/projects/4.jpg" alt="test">
									</div>
									<div class="item-descr">
										<p class="short-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores distinctio doloremque, eius eos est excepturi iste, maiores pariatur quam recusandae saepe similique, tempora temporibus ullam voluptatem. Distinctio eos officia quod.</p>
										<button class="btn-projects-readmore">Подробней</button>
									</div>
								</div>
							</div>
						</div>
						<div class="item__container">
							<div class="item">
								<div class="item__content a--1x1">
									<div class="item-content__img a--fixed">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/projects/3.jpg" alt="test">
									</div>
									<div class="item-descr">
										<p class="short-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores distinctio doloremque, eius eos est excepturi iste, maiores pariatur quam recusandae saepe similique, tempora temporibus ullam voluptatem. Distinctio eos officia quod.</p>
										<button class="btn-projects-readmore">Подробней</button>
									</div>
								</div>
							</div>
						</div>
						<div class="item__container">
							<div class="item">
								<div class="item__content a--1x1">
									<div class="item-content__img a--fixed">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/projects/6.jpg" alt="test">
									</div>
									<div class="item-descr">
										<p class="short-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores distinctio doloremque, eius eos est excepturi iste, maiores pariatur quam recusandae saepe similique, tempora temporibus ullam voluptatem. Distinctio eos officia quod.</p>
										<button class="btn-projects-readmore">Подробней</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<button class="btn btn-section">Все проекты</button>
				</div>
			</div>
		</section>
		<section class="partners">
			<div class="container">
				<h1 class="section-header">Наши партнеры</h1>
				<div class="section-content">
					<div class="partner">
						<a href="#" class="partner__link"><img class="partner__logo koshel-color" src="<?php echo get_template_directory_uri(); ?>/assets/partnr/logo_color/koshel.png" alt=""></a>
						<button class="btn-readmore">перейти на сайт</button>
					</div>
					<div class="partner">
						<a href="#" class="partner__link"><img class="partner__logo dom-color" src="<?php echo get_template_directory_uri(); ?>/assets/partnr/logo_color/logo.png" alt=""></a>
						<button class="btn-readmore">перейти на сайт</button>
					</div>
					<div class="partner">
						<a href="#" class="partner__link"><img class="partner__logo bazis-color" src="<?php echo get_template_directory_uri(); ?>/assets/partnr/logo_color/bazis.png" alt=""></a>
						<button class="btn-readmore">перейти на сайт</button>
					</div>
					<div class="partner">
						<a href="#" class="partner__link"><img class="partner__logo spectr-color" src="<?php echo get_template_directory_uri(); ?>/assets/partnr/logo_color/spectr.png" alt=""></a>
						<button class="btn-readmore">перейти на сайт</button>
					</div>
				</div>
			</div>
		</section>
		<section class="contact-form">
			<h1 class="section-header">Задать вопрос</h1>
			<form>
				<div class="group">
					<input type="text"><span class="highlight"></span><span class="bar"></span>
					<label>Имя</label>
				</div>
				<div class="group">
					<input type="phone"><span class="highlight"></span><span class="bar"></span>
					<label>Телефон</label>
				</div>
				<div class="group">
					<input type="email"><span class="highlight"></span><span class="bar"></span>
					<label>E-mail</label>
				</div>
				<div class="group">
					<textarea placeholder="Введите текст" name="text" required></textarea>
				</div>
				<button type="button" class="btn-readmore">Отправить
					<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
				</button>
			</form>
		</section>
<?php get_footer(); ?>
