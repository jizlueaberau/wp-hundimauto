<?php
/**
 * Main Theme template
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page
 * 
 * @package hundimauto
 *  @since 1.0
 */
	get_header();
?>
	<!-- index.php -->
	<article id="content">

		<?php
			the_content();
		?>

	</article><!-- /end content article -->

<?php
	get_footer();
?>