<?php get_header(); ?>
<div id="main-wrapper" class="posts-wrapper">
	<section id="page-projects">
		<div class="container">
			<div class="category-description">
				<?php echo category_description(); ?>
			</div>
			<div class="projects-category__items">
				<ul class="category-items__list">
					<?php  

						$args = array( 'post_type' => 'rgprojects');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();	

					?>
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
						<a href="<?php the_permalink() ?>" class="link-readmore">Подробней</a>
					</li>
					<?php
						endwhile;
					?>
				</ul>
			</div>
		</div>
	</section>	
</div>
<?php get_footer(); ?>