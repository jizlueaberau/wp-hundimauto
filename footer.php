<?php
/**
 * The Footer File
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package hundimauto
 * @since Hund im Auto Custom Theme 1.0
 */
?>

	<footer id="footer" class="container-fluid px-0">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<?php echo get_theme_mod( 'footer_address' ); ?>
						<div class="container-fluid g-0 coordinates">
							<div class="row">
								<div class="col-3">Telefon</div>
								<div class="col"><a href="tel:<?php echo str_replace(' ', '', get_theme_mod( 'footer_phone' ) ); ?>"><?php echo get_theme_mod('footer_phone'); ?></a></div>
							</div>
							<div class="row">
								<div class="col-3">E-Mail</div>
								<div class="col"><a href="mailto:<?php echo get_theme_mod('footer_mail'); ?>"><?php echo get_theme_mod('footer_mail'); ?></a></div>
							</div>
						</div>
						<p>
							<strong>Öffnungszeiten</strong><br />
							<?php echo get_theme_mod('footer_openhours'); ?>
						</p>
						<?php
						// Default values for social media channels repeater (kirki)
						// Documentation: https://docs.themeum.com/kirki/controls/repeater/
						$defaults = [
							'channel_name'	=> '',
							'channel_icon'	=> '',
							'channel_url'	=> '',
							'icon_style'	=> ''
						];
						// theme mod settings to check
						$settings = get_theme_mod( 'social_media', $defaults );
						?><ul class="social-media">
						<?php foreach ( $settings as $setting ) : ?>
							<li><a href="<?php echo $setting['channel_url']; ?>" target="_blank" rel="no-follow"><img src="<?php echo $setting['channel_icon']['url']; ?>" alt="<?php echo $setting['channel_name']; ?>" style="<?php echo $setting['icon_style']; ?>" /></a></li>
						<?php endforeach; ?>
						</ul>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="row">
							<div class="container-fluid px-0">
								<div class="row">
									<div class="col-6">
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
									<div class="col-6">
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
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-2 logo">
						<a href="/"><img src="<?php echo get_theme_file_uri( 'assets/images/HiA-Sticker50mm-mit-weissem-Rand-OKfix.svg' ); ?>" alt="Hund im Auto, Ihr Ansprechpartner für optimale Transportlösungen für Ihren Hund im Auto" class="w-100" /></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row sub-footer">
			<div class="container">
				<div class="row">
					<div class="col">
						&copy;2024 Hund im Auto&nbsp;|&nbsp;Mit <svg viewBox="0 0 1792 1792" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" style="height: 0.8rem;"><path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26T145 952.5 77 855 23.5 734 0 596q0-220 127-344t351-124q62 0 126.5 21.5t120 58T820 276t76 68q36-36 76-68t95.5-68.5 120-58T1314 128q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z" fill="#e25555"></path></svg> gemacht von <a href="https://kuckmal.gmbh" target="_blank" rel="no-follow">Kuckmal GmbH</a>
					</div>
				</div>
			</div>
		</div>

	</footer><!-- end section footer -->

	<?php get_template_part( 'partials/media-modal' ); ?>

	<?php wp_footer(); ?>

</body>
</html>