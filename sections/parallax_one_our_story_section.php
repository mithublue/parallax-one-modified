<!-- =========================
 SECTION: BRIEF LEFT
============================== -->
<?php
if( !get_theme_mod( 'cc_p1_show_story' ) ){
    return;
}
	$paralax_one_our_story_image = get_theme_mod('paralax_one_our_story_image', parallax_get_file('/images/about-us.png'));
	$parallax_one_our_story_title = get_theme_mod('parallax_one_our_story_title','Our Story');
	$parallax_one_our_story_text = get_theme_mod('parallax_one_our_story_text',esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','parallax-one'));
    $cc_p1_anime_type = get_theme_mod( 'cc_p1_story_anime', 'fadeInDown'  );
	if(!empty($paralax_one_our_story_image) || !empty($parallax_one_our_story_title) || !empty($parallax_one_our_story_content)){
?>
		<section class="brief text-left brief-design-one brief-left wow <?php echo $cc_p1_anime_type; ?>" id="story">
			<div class="section-overlay-layer">
				<div class="container">
					<div class="row">
						<!-- BRIEF IMAGE -->
						<?php
							if( !empty($paralax_one_our_story_image) ){
								echo '<div class="col-md-6 brief-content-two"><div class="brief-image-right"><img src="'.esc_url($paralax_one_our_story_image).'" alt=""></div></div>';
							} elseif ( isset( $wp_customize )   ) {
								echo '<div class="col-md-6 brief-content-two paralax_one_only_customizer"><img src="" alt=""><div class="brief-image-right"></div></div>';
							}
						?>

						<!-- BRIEF HEADING -->
						<div class="col-md-6 content-section brief-content-one">
							<?php
								if( !empty($parallax_one_our_story_title) ){
									echo '<h2 class="text-left dark-text">'.esc_attr($parallax_one_our_story_title).'</h2><div class="colored-line-left"></div>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<h2 class="text-left dark-text paralax_one_only_customizer"></h2><div class="colored-line-left paralax_one_only_customizer"></div>';
								}
							?>

							<?php

								if( !empty($parallax_one_our_story_text) ){
									echo '<div class="brief-content-text">'.$parallax_one_our_story_text.'</div>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<div class="brief-content-text paralax_one_only_customizer"></div>';
								}
							?>
						</div><!-- .brief-content-one-->
					</div>
				</div>
			</div>
		</section><!-- .brief-design-one -->
<?php
	}
?>