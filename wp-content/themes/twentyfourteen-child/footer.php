<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php //do_action( 'twentyfourteen_credits' ); ?>
&copy; Copyright <?php echo date('Y'); ?> - <a href="/"><?php echo get_bloginfo( 'name' ); ?>
</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
<?php
if ( is_single() ){
?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5544a0e7571706d8" async="async"></script>
<?php
}
?>
	<?php wp_footer(); ?>
</body>
</html>