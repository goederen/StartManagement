<!-- =========================
 SECTION: CLIENTS LOGOs
============================== -->
<?php
$parallax_one_logos = get_theme_mod('parallax_one_logos_content', json_encode( array(	
	array("image_url" => parallax_get_file('/images/companies/1.png') ,"link" => "#", "id" => "parallax_one_56d7ea7f40f56" ),
	array("image_url" => parallax_get_file('/images/companies/2.png') ,"link" => "#", "id" => "parallax_one_56d7f2cb8a158" ),
	array("image_url" => parallax_get_file('/images/companies/3.png') ,"link" => "#", "id" => "parallax_one_56d7f2cc8a159" ),
	array("image_url" => parallax_get_file('/images/companies/4.png') ,"link" => "#", "id" => "parallax_one_56d7f2ce8a15a" ),
	array("image_url" => parallax_get_file('/images/companies/5.png') ,"link" => "#", "id" => "parallax_one_56d7f2cf8a15b" )
) ) );

if( !empty( $parallax_one_logos ) ){
	$parallax_one_logos_decoded = json_decode( $parallax_one_logos );
	parallax_hook_logos_before(); ?>

	<div class="clients white-bg" id="clients" role="region" aria-label="<?php esc_html_e(' Affiliates Logos', 'parallax-one' ); ?>">
		<?php
		parallax_hook_logos_top(); ?>
		<div class="container">
			<section class="box-container">
			  <div id="box" class="box show-front">
				<figure class="front" id="front"><h2 class="box-text"><i class="material-icons">lightbulb_outline</i>&nbsp;&nbsp;&nbsp;Ondernemersidee</h2></figure>
				<figure class="back" id="back"><h2 class="box-text"><i class="material-icons">flight_takeoff</i>&nbsp;&nbsp;&nbsp;Ondernemen</h2></figure>
				<figure class="right" id="right"></figure>
				<figure class="left" id="left"></figure>
				<figure class="top" id="top"><img src="//www.startmanagement.nl/wp-content/uploads/2016/07/web-scale.png" alt="StartManagement"></figure>
				<figure class="bottom" id="bottom"><h2 class="box-text"><i class="material-icons">build</i>&nbsp;&nbsp;&nbsp;Ondernemersplan</h2></figure>
			  </div>
			</section>
 		</div>
		<?php
		parallax_hook_logos_bottom();?>
	</div>
	<?php
	parallax_hook_logos_after();
} ?>
