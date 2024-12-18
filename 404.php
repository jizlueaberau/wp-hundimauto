<?php
/**
 * Theme template for displaying 404 not found page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package hundimauto
 * @since 1.0
 */
	get_header();
?>
	
	<section id="content" role="main">

		<article class="container">
			<div class="row">
				<div class="page-title col-12">
					<hgroup class="os-animation" data-animation="animate__fadeInUp" data-delay="200ms">
						<h1><a href="/">hundimauto.ch</a><em>&nbsp;&ndash;&nbsp;Hundegitter und Hundeboxen <strong>nach Mass</strong> in bewährter Schweizer Premium Qualität.</em></h1>
					</hgroup>
				</div>
			</div>
			<div class="row">
				<div class="message404 col-12 g-0">
					<div class="rcol page-title os-animation" data-animation="animate__fadeInUp" data-delay="400ms">
						<hgroup>
							<h2><strong>Hoppla!</strong><br /><br />Da ist etwas schief gelaufen.</h2>
						</hgroup>
						<p><strong>Fehler 404:</strong> &ndash; Seite nicht gefunden. Hier geht's lang:</p>
						<?php
							wp_nav_menu(
								array(
									'theme_location'		=> 'secondary',
									'depth'					=> 1,
									'container'				=> 'nav',
									'container_class'		=> '',
									'menu_class'			=> 'footer-nav',
									'fallback_cb'			=> false
								)
							);
						?>
					</div>
					<div class="lcol">
						<div class="lottie os-animation" data-animation="animate__fadeInUp" data-delay="400ms">
							<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
							<dotlottie-player src="https://lottie.host/55adbc6a-ca09-48ae-9472-1eb506602e45/fe0beyRwKS.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></dotlottie-player>
						</div>
					</div>
				</div>
			</div>
		</article><!-- /end article page404 -->
	</section><!-- /end content section -->

	<br /><br /><br />

<?php
	get_footer();
?>