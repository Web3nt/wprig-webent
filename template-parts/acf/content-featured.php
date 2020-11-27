<?php
/**
 * Template part for displaying ACF Flexible Content
 * -- Featured Content
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

wp_rig()->print_styles( 'wp-rig-content-featured' );


?>

<?php
	$content = get_sub_field('article_content')[0];

	?>
	<div class="featured">
		<style>
			.featured {
				<?php if($content['background_image']) : ?>background: url("<?php echo $content['background_image'] . '");'; endif; ?>
				<?php if($content['height']) : ?>height: <?php echo $content['height'] . ';'; endif; ?>
				<?php if($content['header_padding']) : ?>padding: <?php echo $content['header_padding'] . ';'; endif; ?>
				<?php if($content['header_margin']) : ?>margin: <?php echo $content['header_margin']; endif; ?>
				background-repeat: no-repeat;
				background-size: contain;
			}
		</style>
		<?php if($content['title']) : ?>
			<h2 style="
				<?php if($content['title_position']) : ?>
					<?php echo $content['title_position']; ?>
				<?php endif; ?>
				<?php if($content['title_alignment']) : ?>
					text-align: <?php echo $content['title_alignment'] . ';'; ?>
				<?php endif; ?>
				<?php if($content['title_color']) : ?>
					color: <?php echo $content['title_color'] . ';'; ?>
				<?php endif; ?>
			">
				<?php echo $content['title']; ?>
			</h2>
		<?php endif; ?>
		<?php if($content['header_tagline']) : ?>
			<p class="tagline" style="<?php echo $content['tagline_position'] . ';' .
			'text-align:' . $content['tagline_alignment'] . ';' .
			'color' . $content['tagline_color'] . ';'
			; ?>"><?php echo $content['header_tagline']; ?></h2>
		<?php endif; ?>
		<?php if($content['call_to_action']) : ?>
			<a class="cta" href="<?php echo $content['call_to_action']['url']; ?>" title="<?php echo $content['call_to_action']['title']; ?>" target="<?php echo $content['call_to_action']['target']; ?>"><?php echo $content['call_to_action']['title']; ?></a>
			<style>
				.featured .cta {
					<?php if($content['cta_position']) : ?>
						<?php echo $content['cta_position']; ?>
					<?php endif; ?>
					<?php if($content['cta_alignment']) : ?>
						text-align: <?php echo $content['cta_alignment'] . ';'; ?>;
					<?php endif; ?>
					<?php if($content['cta_color']) : ?>
						color: <?php echo $content['cta_color'] . ';' ?>
					<?php endif; ?>
				}
			</style>
		<?php endif; ?>

	</div>







