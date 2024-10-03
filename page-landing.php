<?php
/**
 * Custom Theme template for landing page purposes
 * 
 * Template Name: Landing Page
 * description: Landing Page for custom video styling
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package hundimauto
 * @since 1.0
 */
	get_header();
?>
	
	<article id="content" class="landing-page" role="main">

		<?php

			the_content();
		?>

		<br /><br /><br />

		<?php
			
			get_template_part( 'partials/pre-footer' );

		?>

	</article><!-- /end content article -->

<?php
	get_footer();
?>