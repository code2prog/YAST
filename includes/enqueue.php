<?php
/**
 * @param $path
 *
 * @return mixed
 */
function YAST_version( $path ) {
	$manifest = file_get_contents( get_template_directory() . '/mix-manifest.json' );
	$manifest = json_decode( $manifest );

	return $manifest->{$path};
}


function YAST_enqueuestyle() {
	wp_enqueue_style( 'fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );
	wp_enqueue_style( 'YAST_CSS', get_template_directory_uri() . YAST_version( '/assets/dist/css/app.css' ), false );
}

function YAST_enqueuescript() {

	wp_enqueue_script( 'YAST_JS', get_template_directory_uri() . YAST_version( '/assets/dist/js/app.js' ), [ 'jquery' ], false, true );
}

add_action( 'wp_enqueue_scripts', 'YAST_enqueuestyle' );
add_action( 'wp_enqueue_scripts', 'YAST_enqueuescript' );