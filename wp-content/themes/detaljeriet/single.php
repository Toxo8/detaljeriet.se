<?php
/**
 * Template for blog posts
 *
 *
 *
 * @package Detaljeriet
 * @since Detaljeriet 1.0
 */

?>


<?php get_header(); ?>

<div class="wrapper">

	<div class="post-grid-block">

		<?php

		if (have_posts() ):

			while (have_posts()): the_post(); ?>

				<div class="block-1">

					<div class="post-date"><?php the_time('j F Y'); ?> </div>
					<div class="post-title"><?php the_title(); ?></div>
				</div>

				<div class="block-2"><?php the_post_thumbnail('medium', array( 'class' => 'post-img' )); ?></div>
				<div class="post-content"><?php the_content(); ?></div>

				<?php if( get_field('extra_image') ): ?>
					<div class="block-3">
							<img class="post-img" src="<?php the_field('extra_image'); ?>" />
					</div>
				<?php endif; ?>

			<?php endwhile; else: ?>

		<?php endif; ?>

	</div>

	<div class="more-posts-grid-block">
		<?php
			global $post;
			$currentID = get_the_ID();
			$args = array('post_type' => 'post',  'posts_per_page' => 4, 'post__not_in' => array($currentID) );
			$lastposts = get_posts( $args );
			foreach ( $lastposts as $post ) :
				setup_postdata( $post ); ?>

					<div class="blog-post">
						<div class="animate-fade">
							<div class="border-shadow">
								<div class="blog-date"><?php the_time('j F Y'); ?> </div>

								<div class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>

								<div class="blog-content">
									<?php
										$content = get_the_content();
										echo mb_strimwidth($content, 0, 150, '...');
									?>
								</div>

								<a class="read-more-link" href="<?php the_permalink() ?>"><span>Läs mer</span></a>
							</div>
						</div>
					</div>

			<?php endforeach;
			wp_reset_postdata(); ?>

	</div>

</div>


<?php get_footer(); ?>
