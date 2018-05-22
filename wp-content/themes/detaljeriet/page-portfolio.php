<?php
/**
 * Template Name: Portfolio Page
 *
 *
 *
 * @package Detaljeriet
 * @since Detaljeriet 1.0
 */

?>

<?php get_header() ?>


<div class="portfolio-page">

	<div class="top-text-block">

		<?php

			while ( have_posts() ) : the_post();

				the_content();

			endwhile;
			wp_reset_query();
		?>

	</div>

	<div class="portfolio-grid-block">

		<?php
			global $post;
			$posts = get_posts(array(
				'post_type' => 'portfolio'
			));

			if ( $posts ) :
				foreach ( $posts as $post ) :
		?>
					<div class="portfolio">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href=<?php the_permalink(); ?> >
								<?php the_post_thumbnail('auto', array( 'class' => 'image-box' )); ?>
							</a>
							<div class="hidden-title"><a href=<?php the_permalink(); ?> ><?php the_title(); ?></a></div>
							<div class="portfolio-hover-box"></div>
						<?php endif; ?>
					</div>

				<?php endforeach;
				wp_reset_postdata();
			endif;
		?>


		<!-- Ajax Load More plugin shortcode for infinty scroll -->
		<?php //echo do_shortcode('[ajax_load_more post_type="portfolio" posts_per_page="2" transition_container="false" scroll_distance="150"]'); ?>

	</div>
</div>


<?php get_footer() ?>
