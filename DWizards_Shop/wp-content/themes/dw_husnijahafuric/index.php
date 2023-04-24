<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dw_HusnijaHafuric
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
    />
  </head>
  <body>
    <div class="homepage">
      <img class="homepage-child" alt="" src="./public/group-1.svg" />
      <div class="group-parent">
        <div class="group-container">
          <div class="home-parent">
            <div class="home">Home</div>
            <div class="shop">Shop</div>
          </div>
          <div class="o-nama">O

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
