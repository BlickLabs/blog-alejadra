<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/lib/css/bootstrap.min.css' ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-header.css' ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-footer.css' ?>">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shoreditch' ); ?></a>
	<header class="header-navbar">
	  <input type="checkbox" id="navbar-trigger" />
	  <label class="fa fa-bars" for="navbar-trigger"></label>
		<a href="http://dev.alegpaez.com/" class="centerLogo">
	    <img class="header-navbar-logo" src="<?php echo get_template_directory_uri() . '/img/icons/logo_2.png' ?>"/>
	  </a>
	  <ul class="header-navbar-list">
			<li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://dev.alegpaez.com">
	        Inicio
	      </a>
	    </li>
	    <li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://dev.alegpaez.com/recetas/">
	        Recetas
	      </a>
	    </li>
	    <li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://dev.alegpaez.com/videos/">
	        Videos
	      </a>
	    </li>
	    <li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://dev.alegpaez.com/servicios/">
	        Servicios
	      </a>
	    </li>
	    <li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://dev.alegpaez.com/acerca/">
	        Acerca de mi
	      </a>
	    </li>
	    <li class="header-navbar-list-item select" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://blog.alegpaez.com/">
	        Blog
	      </a>
	    </li>
			<li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://dev.alegpaez.com/contacto/">
	        Contacto
	      </a>
	    </li>
	  </ul>

	</header>
	<div id="content" class="site-content">
		<?php if ( get_header_image() ) : ?>
			<div class="header-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
			</div><!-- .header-image -->
		<?php endif; // End header image check. ?>
