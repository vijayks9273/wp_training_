<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<body>
<div id="header">
 <div id="headerimg">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class=logo>
				<!-- logo -->
			<?php
			$custom_logo_id = themename_custom_logo_setup( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( the_custom_logo() ) :
					echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '>';
			
		endif;
			?>
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;
			$sample_description = get_bloginfo( 'description', 'display' );
			if ( $sample_description || is_customize_preview() ) :
				?>
				<h4 class="site-description"><?php echo $sample_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h4>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation"style="color:black">
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header'	
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	</div>
  </div> 
