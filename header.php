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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-header.css' ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-footer.css' ?>">
</head>

<body <?php body_class(); ?>>
	function slide() {
		if (document.querySelector('#hamburgerMenu').classList.contains('showMenu')) {
			document.querySelector('#hamburgerMenu').classList.add('slideOutRight');
			document.querySelector('#hamburgerMenu').classList.remove('slideInRight');
			setTimeout(function () {
				document.querySelector('#hamburgerMenuIcon').classList.add('hiddeOnWeb');
				document.querySelector('#imgMenu').classList.add('hiddeOnWeb');
				document.querySelector('#principalHeader').classList.remove('hiddeInMobil');
				document.querySelector('#hamburgerMenu').classList.remove('showMenu');
				document.querySelector('#bars').classList.remove('hiddeOnMobil');
				document.querySelector('#hamburgerMenu').classList.add('hiddeOnMobil');
				document.querySelector('#logo').classList.remove('hiddeOnMobil');
			}, 500);
		} else {
			document.querySelector('#hamburgerMenu').classList.add('slideInRight');
			document.querySelector('#hamburgerMenu').classList.add('showMenu');
			document.querySelector('#hamburgerMenu').classList.remove('slideOutRight');
			document.querySelector('#hamburgerMenuIcon').classList.remove('hiddeOnWeb');
			document.querySelector('#hamburgerMenu').classList.remove('hiddeOnWeb');
			document.querySelector('#hamburgerMenu').classList.remove('hiddeOnMobil');
			document.querySelector('#imgMenu').classList.remove('hiddeOnWeb');
			document.querySelector('#bars').classList.add('hiddeOnMobil');
			document.querySelector('#logo').classList.add('hiddeOnMobil');
		}
	}
	</script>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shoreditch' ); ?></a>
	<header class="header-navbar" id="principalHeader">
	  <input type="checkbox" id="navbar-trigger" />
	  <label class="fa fa-bars" id="bars" for="navbar-trigger" onclick="slide()"></label>
		<a href="http://alegpaez.com/" class="centerLogo" id="logo">
	    <img class="header-navbar-logo" src="<?php echo get_template_directory_uri() . '/img/icons/logo_2.png' ?>"/>
	  </a>
	  <ul class="header-navbar-list animated hiddeOnMobil" id="hamburgerMenu">
			<li class="hamburgerMenuIcon hiddeOnWeb" id="hamburgerMenuIcon">
				<a class="" onclick="slide()">
						<span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
				</a>
			</li>
			<li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://alegpaez.com">
	        Inicio
	      </a>
	    </li>
	    <li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://alegpaez.com/recetas/">
	        Recetas
	      </a>
	    </li>
	    <li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://alegpaez.com/videos/">
	        Videos
	      </a>
	    </li>
	    <li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://alegpaez.com/servicios/">
	        Servicios
	      </a>
	    </li>
	    <li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://alegpaez.com/acerca/">
	        Acerca de mi
	      </a>
	    </li>
	    <li class="header-navbar-list-item select" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://blog.alegpaez.com/">
	        Blog
	      </a>
	    </li>
			<li class="header-navbar-list-item" hcolor="white">
		    <a class="header-navbar-list-item-link" href="http://alegpaez.com/contacto/">
	        Contacto
	      </a>
	    </li>
			<li class="hiddeOnWeb" id="imgMenu">
				<img class="img-blog-menu" src="<?php echo get_template_directory_uri() . '/img/icons/logo_2.png' ?>">
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
