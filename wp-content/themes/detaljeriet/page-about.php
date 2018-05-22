<?php
/**
 * Template Name: About page
 *
 * 
 *
 * @package Detaljeriet
 * @since Detaljeriet 1.0
 */

?>
	
<?php get_header(); ?>

<div class="wrapper">

	<div class="about-info">
	
		<?php
				
		if (have_posts()):
			
			while (have_posts()): the_post(); ?>
				
				<div class="about-content">
					<p class="about-title"><?php the_title(); ?></p>
					<?php the_content(); ?>
				</div>
				<div class="about-thumbnail"><?php the_post_thumbnail('large', array( 'class' => 'about-image-box' )); ?></div>
				
					
			<?php endwhile; else: ?>
				 
		<?php endif; ?>
	
	</div>
	
	<div class="instagram-titel">
		<?php 
			if(get_field('instagram_titel')){ //if the field is not empty
			echo  get_field('instagram_titel') ; //display it
			} 
		?>
	</div>
	
	<div class="instagram-grid">
	
		<?php echo do_shortcode('[instagram-feed]'); ?>
		
	</div>

</div>

<?php get_footer(); ?>