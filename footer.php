<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test_task
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

	</footer><!-- #colophon -->
<?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
