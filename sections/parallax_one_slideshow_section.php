<!-- CONTAINER -->
<?php
if( !get_theme_mod( 'cc_p1_show_slider' ) ){
    return;
}
	$paralax_one_header_logo = get_theme_mod('paralax_one_header_logo', parallax_get_file('/images/logo-2.png'));
	$parallax_one_header_title = get_theme_mod('parallax_one_header_title','Simple, Reliable and Awesome.');
	$parallax_one_header_subtitle = get_theme_mod('parallax_one_header_subtitle','Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
	$parallax_one_header_button_text = get_theme_mod('parallax_one_header_button_text','GET STARTED');
	$parallax_one_header_button_link = get_theme_mod('parallax_one_header_button_link','#');
    $cc_p1_anime_type = get_theme_mod( 'cc_p1_header_anime', 'fadeInDown'  );
    $slideshow_id = get_theme_mod( 'cc_p1_slider_id'  );
    if(!empty($paralax_one_header_logo) || !empty($parallax_one_header_title) || !empty($parallax_one_header_subtitle) || !empty($parallax_one_header_button_text)){
?>
		<div class="container  wow <?php echo $cc_p1_anime_type; ?>" id="parallax_header">
            <?php putRevSlider( $slideshow_id );?>
		</div>
<?php
	}
?>
