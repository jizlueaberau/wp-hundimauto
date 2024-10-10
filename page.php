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
	
	<section id="content" role="main">

		<?php
			the_content();
		?>

		<br /><br /><br />

	</section><!-- /end content section -->

<?php
	get_footer();
?>