<?php
/**
*
*
*
*
* @package Detaljeriet
* @since Detaljeriet 1.0
*/
?>
<html>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116460947-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-116460947-1');
	</script>

	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0"/>
	<title>Detaljeriet</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<main>
	<?php if (is_page('start')) { ?>
		<div class="header-grid-block header-bg-color">
	<?php } else { ?>
		<div class="header-grid-block">
	<?php } ?>
		<div class="header-logo">

			<?php if (is_page('start')) { ?>

				<div class="text-logo">
					<p id="header-logo-1">Detaljeriet Designbyrå </p>
					<p id="header-logo-2">Design, kommunikation & strategi  </p>
				</div>
			<?php } else { ?>
				<div class="logo" >
					<a href="<?php echo home_url(); ?>" >
					<?php $image_attributes = wp_get_attachment_image_src( $attachment_id = 50 );
						if ( $image_attributes ) : ?>
							<img class="home-link" src="<?php echo $image_attributes[0]; ?>" />
						<?php endif; ?>
					</a>

				</div>

			<?php } ?>
		</div>

		<div class="header-menu">
			<div class="hamburger" id="hamburger-1">
				 <span class="line"></span>
				 <span class="line"></span>
				 <span class="line"></span>
			 </div>

			<!--<a class="toggle-nav" href="#">&#9776;</a> -->

			<div class="nav-menu">
				<?php wp_nav_menu(); ?>
			</div>
		</div>
	</div>
	<div class="menu-contact-info">

				<?php
					if(get_field('phone', 141)){ ?>
						<a href="<?php echo antispambot('tel://' . get_field('phone', 141) ); ?> "><?php echo antispambot( get_field('phone', 141));?></a>
					<?php }
				?>
					</br>
				<?php
					if(get_field('email', 141)){ ?>
						<a href="<?php echo antispambot('mailto:' . get_field('email', 141)); ?> "><?php echo antispambot( get_field('email', 141));?></a>
					<?php
					}
				?>
					</br>
					</br>
				<?php
					if(get_field('adress', 141)){ ?>
						<a href="http://detaljeriet.se/kontakt/"><?php echo get_field('adress', 141);?></a>
					<?php
					}
				?>

	</div>
