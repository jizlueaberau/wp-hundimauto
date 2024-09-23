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

	<section id="content">

		<?php
			the_content();
		?>

	</section><!-- /end section content -->

<?php
	get_footer();
?>