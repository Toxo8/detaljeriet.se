<?php
/**
 * Template Name: Contact page
 *
 *
 *
 * @package Detaljeriet
 * @since Detaljeriet 1.0
 */

?>

<?php get_header(); ?>

<div class="wrapper">

	<div class="contact-grid-block">

		<?php

		if (have_posts()):

			while (have_posts()): the_post(); ?>
				<div class="contact-info">
					<div class="contact-title"><?php the_title(); ?></div>
					<div class="contact-content">
						<?php
							if(get_field('phone')){ ?>
								<a href="<?php echo antispambot('tel://' . get_field('phone') ); ?> "><?php echo antispambot( get_field('phone'));?></a>
							<?php }
							?>
							</br>
							<?php
							if(get_field('email')){ ?>
								<a href="<?php echo antispambot('mailto:' . get_field('email')); ?> "><?php echo antispambot( get_field('email'));?></a>
							<?php
							}
						?>
					</div>
				</div>
				<div id="contact-map"></div>
			<?php endwhile; else: ?>

		<?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>
