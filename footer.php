<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sample
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer'
					
				)
			);
			?>
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'sample')); ?>"style="margin-left:850px;">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__(' VT Theme Proudly powered by %s', 'sample'), 'Vijay');
			?>
		</a>
		<span class="sep"> | </span>
		
	</div><!-- .site-info -->
</footer><!-- #colophon -->
<!-- #page -->

<?php wp_footer(); ?>
</body>
</html>