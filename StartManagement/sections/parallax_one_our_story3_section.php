<!-- =========================
 SECTION: BRIEF LEFT
============================== -->
<?php
	global $wp_customize;
	$paralax_one_our_story3_image = get_theme_mod('paralax_one_our_story3_image', parallax_get_file('/images/about-us.png'));
	$parallax_one_our_story3_title = get_theme_mod('parallax_one_our_story3_title',esc_html__('Our Story','parallax-one'));
	$parallax_one_our_story3_text = get_theme_mod('parallax_one_our_story3_text',esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','parallax-one'));
	if(!empty($paralax_one_our_story3_image) || !empty($parallax_one_our_story3_title) || !empty($parallax_one_our_story3_content)){
?>
		<?php parallax_hook_about_before(); ?>
		<section class="brief text-left brief-design-one brief-left" id="story3" role="region" aria-label="<?php esc_html_e('About','parallax-one') ?>">
			<?php parallax_hook_about_top(); ?>
			<div class="section-overlay-layer">
				<div class="container">
					<div class="row">
						<!-- BRIEF HEADING -->
						<div class="content-section brief-content-one">
							<?php
								if( !empty($parallax_one_our_story3_title) ){
									echo '<h2 class="text-left dark-text">'.esc_attr($parallax_one_our_story3_title).'</h2><div class="colored-line-left"></div>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<h2 class="text-left dark-text paralax_one_only_customizer"></h2><div class="colored-line-left paralax_one_only_customizer"></div>';
								}
							?>

							<?php

								if( !empty($parallax_one_our_story3_text) ){
									echo '<div class="brief-content-text">'.$parallax_one_our_story3_text.'</div>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<div class="brief-content-text paralax_one_only_customizer"></div>';
								}
							?>
						</div><!-- .brief-content-one-->
					</div>
				</div>
			</div>
			<?php parallax_hook_about_bottom(); ?>
		</section><!-- .brief-design-one -->
		<?php parallax_hook_about_after(); ?>
<?php
	} else {
		if( isset( $wp_customize ) ) {
?>
			<?php parallax_hook_about_before(); ?>
			<section class="brief text-left brief-design-one brief-left paralax_one_only_customizer" id="story" role="region" aria-label="<?php esc_html_e('About','parallax-one') ?>">
				<?php parallax_hook_about_top(); ?>
				<div class="col-md-6 brief-content-two paralax_one_only_customizer"><img src="" alt=""><div class="brief-image-right"></div></div>
				<div class="col-md-6 content-section brief-content-one">
					<h2 class="text-left dark-text paralax_one_only_customizer"></h2><div class="colored-line-left paralax_one_only_customizer"></div>
					<div class="brief-content-text paralax_one_only_customizer"></div>
				</div>
				<?php parallax_hook_about_bottom(); ?>
			</section>
			<?php parallax_hook_about_after(); ?>
<?php
		}
	}
?>
