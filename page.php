<?php
/**
 * Theme template for displaying page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package hundimauto
 *  @since 1.0
 */
	get_header();
?>
	
	<article id="content">

		<?php
			the_content();
		?>

	</article><!-- /end content article -->

<?php
	get_footer();
?>