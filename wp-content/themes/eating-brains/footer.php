<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eating_Brains
 */

?>

	</div><!-- #content -->

	<div class="footer-nav">
	<div class="alignleft"><?php previous_posts_link( '&laquo; Previous Entries' ); ?></div>
	<div class="alignright"><?php next_posts_link( 'Next Entries &raquo;', '' ); ?></div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			Powered by <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'eating-brains' ) ); ?>"><?php printf( esc_html__( '%s', 'eating-brains' ), 'WordPress' ); ?></a>
			<span class="sep"> & </span>
			Built with <a href="<?php echo esc_url( __( 'http://github.com/carolinesyrup' ) ); ?>"><?php printf( esc_html__( '%s', 'eating-brains' ), 'Eating Brains' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
