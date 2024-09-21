<?php
/**
 * The Footer File
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package hundimauto
 * @since Hund im Auto Custom Theme 1.0
 */
?><footer id="footer" class="container-fluid px-0">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg">
						<p><strong>Hund im Auto</strong><br />
						Herrenwisstrasse 30<br />CH-8180 Bülach</p>
						<div class="container-fluid g-0 coordinates">
							<div class="row">
								<div class="col-3">Telefon</div>
								<div class="col"><a href="tel:+41448750222">+41 44 875 02 22</a></div>
							</div>
							<div class="row">
								<div class="col-3">E-Mail</div>
								<div class="col"><a href="mailto:info@hundimauto.ch">info@hundimauto.ch</a></div>
							</div>
						</div>
						<ul class="social-media">
							<li><a href="/" target="_blank" rel="no-follow"><img src="assets/images/facebook-icon.svg" alt="" height="30" /></a></li>
							<li><a href="/" target="_blank" rel="no-follow"><img src="assets/images/vimeo-icon.svg" alt=""  height="30" /></a></li>
						</ul>
					</div>
					<div class="col-md-12 col-lg-3">
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
					<div class="col-md-12 col-lg-3">
						<?php
							wp_nav_menu(
								array(
									'theme_location'		=> 'third',
									'depth'					=> 1,
									'container'				=> 'nav',
									'container_class'		=> '',
									'menu_class'			=> 'footer-meta-nav',
									'fallback_cb'			=> false
								)
							);
						?>
					</div>
					<div class="col-md-12 col-lg-2 logo">
						<a href="/"><img src="<?php echo get_theme_file_uri( 'assets/images/HiA-Sticker50mm-mit-weissem-Rand-OKfix.svg' ); ?>" alt="" /></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row sub-footer">
			<div class="container">
				<div class="row">
					<div class="col">
						&copy;2024 Hund im Auto
					</div>
				</div>
			</div>
		</div>

	</footer><!-- end section footer -->



	<div id="debug">
	</div>

	<?php wp_footer(); ?>

</body>
</html>