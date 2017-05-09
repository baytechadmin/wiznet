<?php 

/* Insert custom functions here */

add_action( 'login_form_bottom', 'add_lost_password_link' );
function add_lost_password_link() {
return '<a href="'.site_url().'/password-reset/">Lost Password?</a>';
}

function cubiq_login_init () {
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'login';

    if ( isset( $_POST['wp-submit'] ) ) {
        $action = 'post-data';
    } else if ( isset( $_GET['reauth'] ) ) {
        $action = 'reauth';
    } else if ( isset($_GET['key']) ) {
        $action = 'resetpass-key';
    }

    // redirect to change password form
    if ( $action == 'rp' || $action == 'resetpass' ) {
        wp_redirect( home_url('/signup/?action=resetpass') );
        exit;
    }

    // redirect from wrong key when resetting password
    if ( $action == 'lostpassword' && isset($_GET['error']) && ( $_GET['error'] == 'expiredkey' || $_GET['error'] == 'invalidkey' ) ) {
        wp_redirect( home_url( '/signup/?action=forgot&failed=wrongkey' ) );
        exit;
    }

    if (
        $action == 'post-data'        ||            // don't mess with POST requests
        $action == 'reauth'           ||            // need to reauthorize
        $action == 'resetpass-key'    ||            // password recovery
        $action == 'logout'                         // user is logging out
    ) {
        return;
    }

    wp_redirect( home_url( '/signup/' ) );
    exit;
}
add_action('login_init', 'cubiq_login_init');
function cubiq_login_redirect ($redirect_to, $url, $user) {
	//print_r($user->errors);
	//die();
    if ( !isset($user->errors) ) {
       wp_redirect( home_url( $path = 'dashboard', $scheme = relative ) );
	   exit;
    }
	else
	{
   	 wp_redirect( home_url('/signup/') . '?action=login&failed=1');
   	 exit;
	}
}
add_filter('login_redirect', 'cubiq_login_redirect', 10, 3);
function my_excerpt_length($length) {
return 40;
}
add_filter('excerpt_length', 'my_excerpt_length');
?>