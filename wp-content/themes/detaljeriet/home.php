<?php
/**
 * The blog posts content
 *
 *
 *
 * @package Detaljeriet
 * @since Detaljeriet 1.0
 */
?>


<?php get_header(); ?>

<div class="blog-wrapper">

	<!-- <div class="blog-header-title">

		<?php //the_field('extra_textfield', get_option('page_for_posts')) ; ?>

	</div> -->

	<div class="blog-grid-block">
		<?php
		if (have_posts() ):

			while (have_posts()): the_post(); ?>

				<div class="blog-post">
					<div class="animate-fade">
						<div class="border-shadow">
							<div class="blog-date"><?php the_time('j F Y'); ?> </div>

							<div class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

							<div class="blog-content">
								<?php
									$content = get_the_content();
									echo mb_strimwidth($content, 0, 145, '...');
								?>
							</div>

							<a class="read-more-link" href="<?php the_permalink(); ?>"><span>Läs mer</span></a>
						</div>
					</div>
				</div>



			<?php

			endwhile; else: ?>

		<?php endif; ?>
	</div>
</div>


<?php get_footer(); ?>
