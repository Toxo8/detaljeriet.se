<?php
/**
 * Template for portfolio posts
 *
 *
 *
 * @package Detaljeriet
 * @since Detaljeriet 1.0
 */

?>


<?php get_header(); ?>

<div class="wrapper">



		<?php

		if (have_posts() ):

			while (have_posts()): the_post(); ?>
				<div class="backNextLinks">
					<div class="return-link wrapLinks"><a href="<?php echo get_page_link( get_page_by_title( 'Projekt' )->ID ); ?>"><span>Visa alla projekt</span></a></div> <!-- Back to project site -->

					<div class="next-post wrapLinks"><span><?php previous_post_link( '%link', 'Nästa', false ); ?></span></div> <!-- Go to the next project -->
				</div>
				<div class="single-project-grid">
				<div class="single-project-img-container"><?php the_post_thumbnail('full', array( 'class' => 'single-project-img' )); ?></div>
				<div class="single-project-title"><?php the_title(); ?></div>
				<div class="single-project-content"><?php the_content(); ?></div>

				<?php if( get_field('medium_1') ): ?>
					<div class="medium-image">
							<img class="single-project-img" src="<?php the_field('medium_1'); ?>" />
					</div>
				<?php endif; ?>

				<?php if( get_field('medium_2') ): ?>
					<div class="medium-image">
							<img class="single-project-img" src="<?php the_field('medium_2'); ?>" />
					</div>
				<?php endif; ?>

				<?php if( get_field('large') ): ?>
					<div class="large-image">
						<img class="single-project-img" src="<?php the_field('large'); ?>" />
					</div>
				<?php endif; ?>
				</div>
			<?php endwhile; else: ?>

		<?php endif; ?>



</div>


<?php get_footer(); ?>
