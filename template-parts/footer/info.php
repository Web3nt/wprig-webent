<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">

	<p><?php the_field('copyright', 'option'); ?></p>

	<?php

	if(get_field('footer_logo', 'option') == 'default') :
		the_custom_logo();
	elseif(get_field('footer_logo', 'option') == 'custom') :
		echo wp_get_attachment_image(get_field('footer_logo_image', 'option'), 'full');
	endif;

	?>

	<?php
	/* translators: Theme name. */
	// printf( esc_html__( 'Theme: %s by the contributors.', 'wp-rig' ), '<a href="' . esc_url( 'https://github.com/wprig/wprig/' ) . '">WP Rig</a>' );

	// if ( function_exists( 'the_privacy_policy_link' ) ) {
	// 	the_privacy_policy_link( '<span class="sep"> | </span>' );
	// }
	?>
</div><!-- .site-info -->
