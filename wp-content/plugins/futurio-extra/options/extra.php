<?php

/**
 * Reset some theme mod from url in admin area - administrators only
 */
add_action( 'admin_init', 'futurio_extra_reset_mod' );

function futurio_extra_reset_mod() {
  $current_user = wp_get_current_user();
  // This will help you reset some theme mods from URL. Perfect if you put something wrong into custom code and it will break your page
  // Code example:
  // Reset code added to the HEAD: ?reset-theme-mods=1&option=header-code
  // Reset code added to the footer: ?reset-theme-mods=1&option=footer-code
  // You can use it if you are site administrator and your are in admin area.
  if ( isset( $_GET['reset-theme-mods'] ) && '1' === $_GET['reset-theme-mods'] && $_GET['option'] != '' && is_admin() !== false && current_user_can('administrator') ) {
      remove_theme_mod( $_GET['option'] );
  }
}

function futurio_extra_col() {
    if ( futurio_extra_check_for_futurio_pro() ) {
      return 'color';
    } else {
      return;
    } 
}

function futurio_extra_g_fonts() {
  if ( futurio_extra_check_for_futurio_pro() ) {
    $fonts = array();
  } else {
  	$fonts = array(
    	'fonts' => array(
    		'google' => array(
    			'Roboto',
    			'Open Sans',
    			'Lato',
    			'Roboto Condensed',
    			'Slabo 27px',
    			'Montserrat',
    			'Oswald',
    			'Source Sans Pro',
    			'Raleway',
    			'Merriweather',
    		),
    	),
    );
  }
  return $fonts;
}

function futurio_extra_adjust_customizer_responsive_sizes() {

        $mobile_margin_left = '-240px'; //Half of -$mobile_width
        $mobile_width = '480px';
        $mobile_height = '720px';

        $tablet_margin_left = '-384px'; //Half of -$tablet_width
        $tablet_width = '768px';
        $tablet_height = '925px';

?>
        <style>
            .wp-customizer .preview-mobile .wp-full-overlay-main {
                margin-left: <?php echo $mobile_margin_left; ?>;
                width: <?php echo $mobile_width; ?>;
                height: <?php echo $mobile_height; ?>;
            }

            .wp-customizer .preview-tablet .wp-full-overlay-main {
                margin-left: <?php echo $tablet_margin_left; ?>;
                width: <?php echo $tablet_width; ?>;
                height: <?php echo $tablet_height; ?>;
            }
        </style>
<?php

    }

    add_action( 'customize_controls_print_styles', 'futurio_extra_adjust_customizer_responsive_sizes' );

