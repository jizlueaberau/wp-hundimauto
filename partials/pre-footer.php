<?php
/**
 * 
 * Partial renders the Pre-Footer contact information
 */
?>

		<div id="pre-footer" class="container-fluid px-0 <?php echo get_theme_mod( 'pre-footer_bg_color_class' ); ?>">
			<div class="row">
				<div class="container">
					<hgroup class="os-animation" data-animation="animate__fadeInUp">
						<h3><?php echo get_theme_mod( 'pre-footer_title'); ?></h3>
					</hgroup>
					<div class="contact-box flex-center">
						<div class="button os-animation" data-animation="animate__fadeInLeft" data-delay="300ms"><button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo get_theme_mod( 'pre-footer_target_url'); ?>;'"><?php echo get_theme_mod( 'pre-footer_button_text' ); ?></button></div>
						<div class="info os-animation"  data-animation="animate__fadeInRight" data-delay="300ms"><?php echo get_theme_mod( 'pre-footer_info_text'); ?></div>
					</div>
				</div>
			</div>
		</div>