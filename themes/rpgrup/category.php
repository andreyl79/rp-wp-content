<?php get_header(); ?>
<?php global $post; ?>
<section id="page-projects">
	<div class="main-wrapper">
		<div class="container">
			<div class="category-description">
				<?php echo category_description(); ?>
			</div>
			<?php
				$args = array( 'post_type' => 'rgprojects');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>

			<div class="projects-category__items">
				<ul class="category-items__list">
					<li class="category-item">
						<?php
						if ( has_post_thumbnail() ){
							?>
							<div class="card-image">
								<?php the_post_thumbnail( 'full', array( 'class' => 'item-image' )); ?>
							</div>
							<?php
						}
						?>
						<h3 class="item-name"> <?php the_title(); ?></h3>
						<?php the_content(); ?>
						<a class="link-readmore" href="<?php  echo get_permalink( $post->ID );  ?>">Подробней</a>
					</li>
				</ul>
			</div>
		</div>

			<?php
				endwhile;
			?>
	</div>
</section>

<?php get_footer(); ?>