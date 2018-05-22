<?php
/**
 * Template Name: Home Page
 *
 *
 *
 * @package Detaljeriet
 * @since Detaljeriet 1.0
 */

?>

<?php get_header() ?>

	<div class="bg">

		<?php if( get_field('logo_img') ): ?>

			<img class="svg bg-img" src="<?php the_field('logo_img'); ?>" />

		<?php endif; ?>

	</div>

	<!-- <div class="arrow-down">&darr;</div> -->

	<div class="intro">
		<div class="intro-grid-block">

			<div class="intro-text-left">

				<?php

				while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

				<?php
				endwhile;
				wp_reset_query();
				?>

			</div>
			<div class="intro-right-title">
				<?php
					if(get_field('title')){
						echo  get_field('title') ;
					}
				?>
			</div>
			<div class="intro-right-content">
				<?php
					if(get_field('textfield')){
						echo  get_field('textfield') ;
					}
				?>
			</div>
			<div class="intro-right-link">
				<?php
					if(get_field('linktext')){ ?>
						<a href="<?php echo get_page_link( get_page_by_title( 'Kontakt' )->ID ); ?>"><span class="strike"><?php echo  get_field('linktext') ;?></span></a>
				<?php }
				?>
			</div>

		</div>

	</div>

	<div class="projects-views">

				<?php
					global $post;
					$posts = get_posts(array(
						'post_type' => 'portfolio',
						'posts_per_page' => 4,
						'meta_query' => array(
							array(
								'key' => 'frontpage_projects', // name of custom field
								'value' => '"show"',
								'compare' => 'LIKE' // compare if checkbox is checked
						  )
					    )
					));

					if ( $posts ) : ?>
						<div class="project-grid-block">
							<?php foreach ( $posts as $post ) : ?>

								<div class="portfolio">
									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink(); ?>" >
											<?php the_post_thumbnail('auto', array( 'class' => 'image-box' )); ?>
										</a>
										<div class="hidden-title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></div>
										<div class="portfolio-hover-box"></div>
									<?php endif; ?>
								</div>

							<?php endforeach;
							wp_reset_postdata(); ?>
						</div>
					<?php endif; ?>

	</div>

<?php get_footer() ?>
