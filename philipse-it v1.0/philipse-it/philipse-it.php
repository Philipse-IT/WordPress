<?php
/*
Plugin Name: Philipse IT Wordpress plugin
Description: Bezoek www.philipse-it.nl/contact/ voor meer informatie over deze plugin.
Version: 0.1
License: GPL
Author: Feike Falkena
Author URI: 
*/

add_action( 'admin_menu', 'pit_add_admin_menu' );
add_action( 'admin_init', 'pit_settings_init' );

function pit_add_admin_menu(  ) { 
	add_options_page( 'Philipse IT Plugin opties', 'Philipse IT WP opties', 'manage_options', 'pit', 'pit_options_page' );
}

function pit_settings_init(  ) { 
	register_setting( 'pluginPage', 'pit_settings' );
	add_settings_section(
		'pit_pluginPage_section_1', 
		__( 'Diverse opties', 'wordpress' ), 
		'pit_settings_section_callback', 
		'pluginPage'
	);
	add_settings_field( 
		'pit_checkbox_field_0', 
		__( 'Updates verbergen voor niet-admin', 'wordpress' ), 
		'pit_checkbox_field_0_render', 
		'pluginPage', 
		'pit_pluginPage_section_1' 
	);
	add_settings_field( 
		'pit_checkbox_field_1', 
		__( 'Emoticons uitzetten', 'wordpress' ), 
		'pit_checkbox_field_1_render', 
		'pluginPage', 
		'pit_pluginPage_section_1' 
	);
	add_settings_field( 
		'pit_checkbox_field_7', 
		__( 'Philipse IT nieuws feed tonen', 'wordpress' ), 
		'pit_checkbox_field_7_render', 
		'pluginPage', 
		'pit_pluginPage_section_1' 
	);
	add_settings_field( 
		'pit_checkbox_field_8', 
		__( 'Philipse IT WordPress tips feed tonen', 'wordpress' ), 
		'pit_checkbox_field_8_render', 
		'pluginPage', 
		'pit_pluginPage_section_1' 
	);
/*	add_settings_field( 
		'pit_text_field_10', 
		__( 'Excerpt lengte in aantal woorden<br>(standaard 55)', 'wordpress' ), 
		'pit_text_field_10_render', 
		'pluginPage', 
		'pit_pluginPage_section_1' 
	);*/

	add_settings_section(
		'pit_pluginPage_section_2', 
		__( 'Dashboard widgets verbergen', 'wordpress' ), 
		'pit_settings_section_callback', 
		'pluginPage'
	);
	add_settings_field( 
		'pit_checkbox_field_2', 
		__( 'Welkom bij WordPress', 'wordpress' ), 
		'pit_checkbox_field_2_render', 
		'pluginPage', 
		'pit_pluginPage_section_2' 
	);
	add_settings_field( 
		'pit_checkbox_field_3', 
		__( 'Op dit moment', 'wordpress' ), 
		'pit_checkbox_field_3_render', 
		'pluginPage', 
		'pit_pluginPage_section_2' 
	);
	add_settings_field( 
		'pit_checkbox_field_4', 
		__( 'Activiteiten', 'wordpress' ), 
		'pit_checkbox_field_4_render', 
		'pluginPage', 
		'pit_pluginPage_section_2' 
	);
	add_settings_field( 
		'pit_checkbox_field_5', 
		__( 'Concept maken', 'wordpress' ), 
		'pit_checkbox_field_5_render', 
		'pluginPage', 
		'pit_pluginPage_section_2' 
	);
	add_settings_field( 
		'pit_checkbox_field_6', 
		__( 'WordPress nieuws', 'wordpress' ), 
		'pit_checkbox_field_6_render', 
		'pluginPage', 
		'pit_pluginPage_section_2' 
	);
}


function pit_checkbox_field_0_render(  ) { 
	$options = get_option( 'pit_settings' );
	$checked = (isset($options['pit_checkbox_field_0'])) ? 'checked' : '';
	?>
	<input type='checkbox' name='pit_settings[pit_checkbox_field_0]' <?php echo $checked; ?> value='1'>
	<?php
}
function pit_checkbox_field_1_render(  ) { 
	$options = get_option( 'pit_settings' );
	$checked = (isset($options['pit_checkbox_field_1'])) ? 'checked' : '';
	?>
	<input type='checkbox' name='pit_settings[pit_checkbox_field_1]' <?php echo $checked; ?> value='1'>
	<?php
}
function pit_checkbox_field_2_render(  ) { 
	$options = get_option( 'pit_settings' );
	$checked = (isset($options['pit_checkbox_field_2'])) ? 'checked' : '';
	?>
	<input type='checkbox' name='pit_settings[pit_checkbox_field_2]' <?php echo $checked; ?> value='1'>
	<?php
}
function pit_checkbox_field_3_render(  ) { 
	$options = get_option( 'pit_settings' );
	$checked = (isset($options['pit_checkbox_field_3'])) ? 'checked' : '';
	?>
	<input type='checkbox' name='pit_settings[pit_checkbox_field_3]' <?php echo $checked; ?> value='1'>
	<?php
}
function pit_checkbox_field_4_render(  ) { 
	$options = get_option( 'pit_settings' );
	$checked = (isset($options['pit_checkbox_field_4'])) ? 'checked' : '';
	?>
	<input type='checkbox' name='pit_settings[pit_checkbox_field_4]' <?php echo $checked; ?> value='1'>
	<?php
}
function pit_checkbox_field_5_render(  ) { 
	$options = get_option( 'pit_settings' );
	$checked = (isset($options['pit_checkbox_field_5'])) ? 'checked' : '';
	?>
	<input type='checkbox' name='pit_settings[pit_checkbox_field_5]' <?php echo $checked; ?> value='1'>
	<?php
}
function pit_checkbox_field_6_render(  ) { 
	$options = get_option( 'pit_settings' );
	$checked = (isset($options['pit_checkbox_field_6'])) ? 'checked' : '';
	?>
	<input type='checkbox' name='pit_settings[pit_checkbox_field_6]' <?php echo $checked; ?> value='1'>
	<?php
}
function pit_checkbox_field_7_render(  ) { 
	$options = get_option( 'pit_settings' );
	$checked = (isset($options['pit_checkbox_field_7'])) ? 'checked' : '';
	?>
	<input type='checkbox' name='pit_settings[pit_checkbox_field_7]' <?php echo $checked; ?> value='1'>
	<?php
}
function pit_checkbox_field_8_render(  ) { 
	$options = get_option( 'pit_settings' );
	$checked = (isset($options['pit_checkbox_field_8'])) ? 'checked' : '';
	?>
	<input type='checkbox' name='pit_settings[pit_checkbox_field_8]' <?php echo $checked; ?> value='1'>
	<?php
}
/*function pit_text_field_10_render(  ) { 
	$options = get_option( 'pit_settings' );
	?>
	<input type='text' name='pit_settings[pit_text_field_10]' value='<?php echo $options['pit_text_field_10']; ?>'>
	<?php
}*/


function pit_settings_section_callback(  ) { 
/*	echo __( 'This section description', 'wordpress' );*/
}


function pit_options_page(  ) { 
	?>
	<form action='options.php' method='post'>
		<h1>Philipse IT  Wordpress opties</h1>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php
}

$options = get_option( 'pit_settings' );

/*-----------------------------------------------------------------------------------*/
/*	LOGIN LOGO
/*-----------------------------------------------------------------------------------*/
function my_login_logo() { ?>
  <style type="text/css">
    .login h1 a {
                  background-image: url(data:image/jpeg;base64,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) !important;
				  height:65px !important;
					width:320px !important;
					background-size: contain !important;
				background-repeat: no-repeat !important;
        			padding-bottom: 30px !important;

    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


/*-----------------------------------------------------------------------------------*/
/*	BACKEND STYLE
/*-----------------------------------------------------------------------------------*/
function admin_enqueue_styles() {
	wp_enqueue_style('admin_styles',plugins_url( '/css/style-be.css', __FILE__ ));
}
add_action('admin_head','admin_enqueue_styles');


/*-----------------------------------------------------------------------------------*/
/*	BACKEND JS
/*-----------------------------------------------------------------------------------*/
function admin_enqueue_scripts() {
	wp_enqueue_script('admin_script',plugins_url( '/js/js-be.js', __FILE__ ));
}
add_action('admin_head','admin_enqueue_scripts');


/*-----------------------------------------------------------------------------------*/
/*	UPDATES VERBERGEN VOOR KLANT
/*-----------------------------------------------------------------------------------*/
function hide_update_notice_to_all_but_admin_users() {
  if (!current_user_can('update_core')) {
    remove_action( 'admin_notices', 'update_nag', 3 );
  }
}
if (isset($options['pit_checkbox_field_0'])) {
	add_action( 'admin_head', 'hide_update_notice_to_all_but_admin_users', 1 );
}


/*-----------------------------------------------------------------------------------*/
/*	EMOTICONS UITZETTEN
/*-----------------------------------------------------------------------------------*/
if (isset($options['pit_checkbox_field_1'])) {
	add_filter( 'option_use_smilies', '__return_false' );
}


/*-----------------------------------------------------------------------------------*/
/*	DASHBOARD WIDGETS UITZETTEN
/*-----------------------------------------------------------------------------------*/
function remove_dashboard_widgets() {
	global $wp_meta_boxes;
	$options = get_option( 'pit_settings' );
	if (isset($options['pit_checkbox_field_2'])) {	update_user_meta( get_current_user_id(), 'show_welcome_panel', false ); /*Welkom bij WordPress*/ }
	if (isset($options['pit_checkbox_field_3'])) {	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); /*Op dit moment*/ }
	if (isset($options['pit_checkbox_field_4'])) {	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');/*Activiteiten*/ }

	if (isset($options['pit_checkbox_field_5'])) {	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); /*Concept maken*/ }
	if (isset($options['pit_checkbox_field_6'])) {	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); /*WordPress nieuws*/ }
}
//if (!current_user_can('manage_options')) {
	add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
//}


/*-----------------------------------------------------------------------------------*/
/*	pit RSS FEED DASHBOARD WIDGETS
/*-----------------------------------------------------------------------------------*/
/* Setting a new cache time for feeds in WordPress */
function prefix_set_feed_cache_time( $seconds ) {
	return 3600;
}
add_filter( 'wp_feed_cache_transient_lifetime' , 'prefix_set_feed_cache_time' );

function pit_dashboard_widgets() {
	$options = get_option( 'pit_settings' );
	if (isset($options['pit_checkbox_field_7'])) {
		wp_add_dashboard_widget( 'dashboard_feed_pitnieuws', 'Philipse IT - Nieuws', 'pit_nieuws_feed_output' );
	}
	if (isset($options['pit_checkbox_field_8'])) {
		wp_add_dashboard_widget( 'dashboard_feed_pittips', 'Philipse IT - Tips', 'pit_tips_feed_output' );
	}
 
	function pit_nieuws_feed_output() {
		echo '<div class="rss-widget">';
		wp_widget_rss_output(array(
			'url' => 'http://philipse-it.nl',
			'title' => 'Philipse IT - Nieuws',
			'items' => 4,
			'show_summary' => 1,
			'show_author' => 0,
			'show_date' => 1
		));
		echo "</div>";
	}

	function pit_tips_feed_output() {
		echo '<div class="rss-widget">';
		wp_widget_rss_output(array(
			'url' => 'http://philipse-it.nl',
			'title' => 'Philipse IT - Tips',
			'items' => 4,
			'show_summary' => 1,
			'show_author' => 0,
			'show_date' => 1
		));
		echo "</div>";
	}
}
add_action('wp_dashboard_setup', 'pit_dashboard_widgets');



/*-----------------------------------------------------------------------------------*/
/*	LENGTE EXCERPT (KORTE TEKST) AANPASSEN
/*-----------------------------------------------------------------------------------*/
/*function custom_excerpt_length( $length ) {
	$options = get_option( 'pit_settings' );
	return intval($options['pit_text_field_10']);
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
*/
