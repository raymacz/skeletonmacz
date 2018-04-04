<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Skeletonmacz
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses skeletonmacz_header_style()
 */
function skeletonmacz_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'skeletonmacz_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'width'                  => 2000,
		'height'                 => 850,
		'flex-height'            => true,
		'wp-head-callback'       => 'skeletonmacz_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'skeletonmacz_custom_header_setup' );
