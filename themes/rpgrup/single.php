<?php get_header(); ?>

<section id="page-projects">
	<div class="main-wrapper">
		<div class="container">
			<?php
			$args = array( 'post_type' => 'rgprojects', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			endwhile;
			?>
			<div class="category-description">
				<?php echo category_description(); ?>
			</div>
			<div class="projects-category__items">
						<?php
						if ( has_post_thumbnail() )
						{
							?>
							<div class="card-image">
								<?php the_post_thumbnail( 'full', array( 'class' => 'item-image' )); ?>
							</div>
							<?php
						}
						?>
						<h3 class="item-name"> <?php the_title(); ?></h3>
						<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>