<?php
/** 
 * @package WordPress
 * @subpackage Bootstrap Thomas
 * @since Bootstrap Thomas 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/forms.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/responsive.css" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header>
  		<nav class="navbar">
  			<div class="navbar-inner">
 				<a class="btn btn-navbar">
					<span class="icon-navbar"></span>
					<span class="icon-navbar"></span>
					<span class="icon-navbar"></span>
		        </a>
				<a href="#" class="name">Babica Bootstrap</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="index.html">In&iacute;cio</a></li>
						<li><a href="#">link 1</a></li>
						<li><a href="#">link 2</a></li>
						<li><a href="#">link 3</a></li>
						<li><a href="#">link 4</a></li>
						<li><a href="#">link 5</a></li>
					</ul>
					<ul class="nav pull-right">
						<li><a href="#">Ajuda</a></li>
						<li><a href="#">Sair</a></li>
					</ul>
				</div>
  			</div>
  		</nav>
	</header>

	<div id="main" class="wrapper">