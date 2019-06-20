<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dekuki
 */


?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="barba-wrapper">
  <div id="page" class="site barba-container relative">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nomadsun' ); ?></a> 

    <header id="masthead" class="site-header absolute top-0 left-0 w-100 ph4 pv3 z-5">
      <nav id="site-navigation" class="main-navigation flex justify-between items-center">
        <a class="menu-toggle block db mr5">
        <img src="<?php bloginfo('template_url')?>/assets/menu.svg"> 
        </a>

        <a href="<?php echo get_site_url(); ?>" class="logo-head w3 ml5">
        <img src="<?php bloginfo('template_directory');?>/assets/logo.svg">  
        </a>

        <div class="flex items-center justify-between icon-container">
            <a href="https://www.instagram.com/thisisdekuki/" class="w1 mh3 mv2">
              <img src="<?php bloginfo('template_directory');?>/assets/instagram.svg" class="db">
            </a>
            <a  href="https://twitter.com/thisisdekuki" class="w1 mh3 mv2">
              <img src="<?php bloginfo('template_directory');?>/assets/twitter.svg" class="db">
            </a>
            <a href="https://www.facebook.com/mariac.gonzalez99" class="w1 mh3 mv2">
              <img src="<?php bloginfo('template_directory')?>/assets/facebook.svg" class="db">
            </a>
        </div>
    </header><!-- #masthead -->
        


  <?php get_template_part('template-parts/content_layouts/content-menu'); ?>

	
		

<div id="content" class="site-content"> 

