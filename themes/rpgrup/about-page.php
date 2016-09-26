<?php
/*
 *  Template Name: About Template Page
 */
?>
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
<?php get_header(); ?>

<section id="page-projects">
	<div class="main-wrapper">
		<div class="container">
			<div class="category-description">
				<p class="category-description__text">ООО «Руспроектгруп» с 2010 года выполняет услуги по проектированию и строительству объектов. За прошедшие 6,5 лет нашей организацией было выполнено большое количество объектов различных назначений.</p>
				<p class="category-description__text">Штат нашей организации постоянно растет в связи с увеличением портфеля заказов. Большинство сотрудников до прихода в «Руспроектгруп» уже работали в сфере проектирования и строительства, тем самым, обеспечивается высокий уровень профессионализма и качества выполняемых работ.</p>
				<p class="category-description__text">За период с 2010 г. были выполнены работы на следующих объектах:</p>
			</div>
			<div class="projects-category__items">
				<ul class="category-items__list">
					<li class="category-item">
						<img src="#" alt="image" />
						<h3 class="item-name">2-х секционный жилой дом с нежилыми</h3>
						<span class="item-date">22.22.2022</span>
						<span class="item-location">. Самара</span>
						<span class="item-short-text">ООО «Радамира»</span>
						<button class="btn-more">подробней</button>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>