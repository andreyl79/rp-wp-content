<?php get_header(); ?>

<section id="single-page">
	<div class="main-wrapper">
		<div class="container">
			<div class="single-page__item">
				<?php 

					if (have_posts()) :
						while (have_posts()) :
							the_post();
				?>
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
	</div>
</section>

<?php get_footer(); ?>