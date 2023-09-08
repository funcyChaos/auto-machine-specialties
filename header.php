<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fresno_Swing_Dance
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<style>
		@font-face {
			font-family: "betty_noirregular";
			src: url("<?=get_template_directory_uri()?>/sass/bettynoir/bettynoir-webfont.woff2") format("woff2"),
				url("./bettynoir/bettynoir-webfont.woff") format("woff");
			font-weight: normal;
			font-style: normal;
		}

		.grid{
			background-image: url("<?=get_template_directory_uri()?>/img/BackgroundNEW.jpg");
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
