<?php
/**
 * The footer content
 *
 *
 *
 * @package Detaljeriet
 * @since Detaljeriet 1.0
 */

?>



	<div class="footer-style">
		<div class="footer-content">

			<a class="footer-contact" href="<?php echo antispambot('mailto:' . get_field('email'));?>"><?php echo antispambot( 'hej@detaljeriet.se');?></a>
			<p class="footer-company">&copy; Detaljeriet <?=date('Y')?></p>

		</div>
	<?php wp_footer(); ?>

	</div>

</main>

</body>

</html>
