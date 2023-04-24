<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dw_HusnijaHafuric
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<title>DWizards Shop</title>
      <link rel="stylesheet" href=' <?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css'>
      <!-- Load fonts style after rendering the layout styles -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700;900&display=swap">
      <link rel="stylesheet" href=' <?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.min.css'>
      <link rel="stylesheet" type="text/css" href=' <?php echo get_template_directory_uri(); ?>/assets/css/slick.css'>
      <link rel="stylesheet" type="text/css" href=' <?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css'>
	  <!--Favicon -->
	  <link rel="apple-touch-icon" sizes="180x180" href=' <?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png'>
	  <link rel="icon" type="image/png" sizes="32x32" href=' <?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png'>
	  <link rel="icon" type="image/png" sizes="16x16" href=' <?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png'>
</head>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dw_husnijahafuric' ); ?></a>

	<header id="masthead" class="site-header">
	</header><!-- #masthead -->
