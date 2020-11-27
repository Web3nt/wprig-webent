<?php
/**
 * Template part for displaying a post's content
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<?php

// Check rows exists.
if( have_rows('article') ):

	// Loop through rows.
	while( have_rows('article') ) : the_row();

		// Load sub field value.
		$settings = get_sub_field('article_settings');
		$content = get_sub_field('article_content')[0];
		// Do something...
		?>


		<article class="content-article <?php echo $settings['article_width']; ?>">
			<style>
				.content-article {
					grid-template: <?php echo $settings['article_grid']; ?>;
					justify-items: <?php echo $settings['grid_justify_items']; ?>;
					align-items: <?php echo $settings['grid_align_items']; ?>;
					<?php if($settings['article_background']) : ?>
						background: <?php echo $settings['article_background']; ?>;
					<?php endif; ?>
					color: <?php echo $settings['article_text_color']; ?>;
				}
			</style>

			<?php if($content['acf_fc_layout'] == 'featured') :

				get_template_part( 'template-parts/acf/content-featured' );

			elseif($content['acf_fc_layout'] == 'header') :

				get_template_part( 'template-parts/acf/content-header' );

			elseif($content['acf_fc_layout'] == 'open_content') :

				get_template_part( 'template-parts/acf/content-open' );

			endif; ?>


		</article>

		<?php
	// End loop.
	endwhile;

// No value.
else :
	// Do something...
endif;


?>



<?php
wp_link_pages(
	[
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-rig' ),
		'after'  => '</div>',
	]
);
?>
