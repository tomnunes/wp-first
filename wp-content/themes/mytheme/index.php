<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<title>
		<?php

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		?>
	</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="author" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link rel="shortcut icon" href="../images/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/forms.css" media="all">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/responsive.css" media="screen">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  	<header>
  		<!-- <nav class="navbar">
  			<div class="navbar-inner">
 				<a class="btn btn-navbar">
					<span class="icon-navbar"></span>
					<span class="icon-navbar"></span>
					<span class="icon-navbar"></span>
		        </a>
				<a href="#" class="name">Nome</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="index.html">In&iacute;cio</a></li>
						<li><a href="#">link 1</a></li>
						<li><a href="#">link 2</a></li>
						<li><a href="#">link 3</a></li>
						<li><a href="#">link 4</a></li>
						<li><a href="#">link 5</a></li>
					</ul>
				</div>
  			</div>
  		</nav> -->
  		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
	</header>

</body>
</html>