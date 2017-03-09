<!-- =========================
 SECTION: RIBBON
============================== -->
<?php
global $wp_customize;
$ribbon_background = get_theme_mod('paralax_one_ribbon2_background', parallax_get_file('/images/background-images/parallax-img/parallax-img1.jpg'));
$parallax_one_ribbon2_title = get_theme_mod('parallax_one_ribbon2_title',esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'));
$parallax_one_ribbon2_text = get_theme_mod('parallax_one_ribbon2_text',esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'));
$parallax_one_button2_text = get_theme_mod('parallax_one_button2_text',esc_html__('GET STARTED','parallax-one'));
$parallax_one_button2_link = get_theme_mod('parallax_one_button2_link','#');
if( !empty($parallax_one_button2_link) && strpos($parallax_one_button2_link, '#') === 0 && 1==2) {
	$parallax_one_go_to = 'onclick="return false;" data-anchor="'.esc_attr($parallax_one_button2_link).'"';
} else {
	$parallax_one_go_to = 'onclick="parent.location=\''.esc_url($parallax_one_button2_link).'\'" data-anchor=""';
}

parallax_hook_ribbon_before();
if(!empty($parallax_one_ribbon2_title) || !empty($parallax_one_button2_text)) {

	echo '<section class="call-to-action ribbon-wrap" id="ribbon2" '. ( !empty($ribbon_background) ? 'style="background-image:url(' . esc_url( $ribbon_background ) . ');"' : '' ) .' role="region" aria-label="' . esc_html__( 'Ribbon', 'parallax-one' ) . '">';
	parallax_hook_ribbon_top();

} else {
	if ( is_customize_preview() ) {
		echo '<section class="call-to-action ribbon-wrap paralax_one_only_customizer" id="ribbon3" ' . ( ! empty( $ribbon_background ) ? 'style="background-image:url(' . esc_url( $ribbon_background ) . ');"' : '' ) . ' role="region" aria-label="' . esc_html__( 'Ribbon', 'parallax-one' ) . '">';
		parallax_hook_ribbon_top();
	}
}

if(!empty($parallax_one_ribbon2_title) || !empty($parallax_one_button2_text) || is_customize_preview()) { ?>
	<div class="section-overlay-layer">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">

					<?php
					if( !empty($parallax_one_ribbon2_title) ){
						echo '<h2 class="white-text strong">'.$parallax_one_ribbon2_title.'</h2>';
					} elseif ( is_customize_preview() ) {
						echo '<h2 class="white-text strong paralax_one_only_customizer"></h2>';
					}
					if( !empty($parallax_one_ribbon2_text) ){
						echo '<h3 class="white-text">'.$parallax_one_ribbon2_text.'</h3>';
					} elseif ( is_customize_preview() ) {
						echo '<h3 class="white-text paralax_one_only_customizer"></h3>';
					}
					if(!empty($parallax_one_button2_text)){ ?>
						<div <?php if(!empty($parallax_one_go_to)){ echo $parallax_one_go_to; } ?> class="button_sliding_bg">
							<span class="screen-reader-text"><?php echo esc_html__('Header button label:','parallax-one').strip_tags(trim($parallax_one_button2_text)); ?></span>
							<?php echo wp_kses_post( $parallax_one_button2_text ); ?>
						</div>
						<?php
					} elseif( is_customize_preview() ){ ?>
						<div class="button_sliding_bg"  <?php if(!empty($parallax_one_go_to)){ echo $parallax_one_go_to; } ?>></div>
						<?php
					} ?>

				</div>
			</div>
		</div>
	</div>
	<?php parallax_hook_ribbon_bottom(); ?>
	</section>
	<?php parallax_hook_ribbon_after(); ?>
	<?php
} ?>