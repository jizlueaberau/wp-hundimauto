<?php
/**
 * Theme template for displaying all pages
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package hundimauto
 * @since 1.0
 */
	get_header();
?>
	
	<article id="content" role="main">

		<?php
			the_content();
		?>

	</article><!-- /end content article -->

	<br /><br /><br />

<?php
	get_footer();
?>