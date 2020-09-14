<?php
/**
 * Template part for displaying a post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<?php get_template_part( 'template-parts/header/page_header', get_post_type() ); ?>

<section id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

	<?php get_template_part( 'template-parts/content/entry_content', get_post_type() ); ?>

</section><!-- #post-<?php the_ID(); ?> -->

<?php get_template_part( 'template-parts/content/entry_footer', get_post_type() ); ?>

