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

		<br /><br /><br />

	</article><!-- /end content article -->

<?php
	get_footer();
?>