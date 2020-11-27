<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="canvas" class="site">
	<style>
		<?php $themeBG = get_field('site_background', 'option'); ?>
		#canvas {
			<?php if($themeBG['background_color']) : ?>
				background-color: <?php echo $themeBG['background_color']; ?>;
			<?php endif; ?>
			<?php if($themeBG['background_image']) : ?>
				background-image: url("<?php echo $themeBG['background_image']; ?> ");
			<?php endif; ?>
			<?php if($themeBG['background_repeat']) : ?>
				background-repeat: <?php echo $themeBG['background_repeat']; ?>;
			<?php endif; ?>
			<?php if($themeBG['background_size'] && $themeBG['background_size'] != 'value') : ?>
				background-size: <?php echo $themeBG['background_size']; ?>;
				<?php elseif($themeBG['background_size'] == 'value') : ?>
					background-size: <?php echo $themeBG['background_size_value']; ?>;
			<?php endif; ?>;
			<?php if($themeBG['background_position']) : ?>
				background-position: <?php echo $themeBG['background_position']; ?>;
			<?php endif; ?>
		}
	</style>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="site-header">
		<?php get_template_part( 'template-parts/header/branding' ); ?>

		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header><!-- #masthead -->
