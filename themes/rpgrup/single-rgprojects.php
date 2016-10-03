<?php get_header(); ?>

<div id="main-wrapper">
	<section id="single-page">
		<div class="container">
			<div class="single-page__item">
				<?php 

					if (have_posts()) :
						while (have_posts()) :
							the_post();
				?>
					<h3 class="item-name"> 
						<?php the_title(); ?>
					</h3>
					<div class="single-page__content">
				<?php
								the_content();
				?>
					</div>
				<?php
						endwhile;
					endif;

				 ?>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>