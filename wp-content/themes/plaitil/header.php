<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href='https://fonts.googleapis.com/css?family=Kadwa:700' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<header class="cd-header is-fixed">
		<div class="cd-logo">
			<img src="http://placehold.it" alt="" />
		</div>
		<a class="cd-primary-nav-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a> <!-- cd-primary-nav-trigger -->
	</header>
	<nav>
		<ul class="cd-primary-nav">
			<li>MENU</li>
		</ul>
	</nav>
	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
