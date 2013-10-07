<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ) ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	
	<link rel="stylesheet" href="path/to/css/reset.css" media="screen" />
	
	<?php wp_head(); //this is a HOOK. it is required for plugins and other things to work ?>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>" media="screen" />

<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body class="home">
	<header role="banner">
		<h1 class="site-name"><a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
		<nav>
			<ul class="nav">
				<?php wp_list_pages( array(
					'depth' => 1,
					'title_li' => '',
				) ); ?>
			</ul>
		</nav>
		<ul class="utilities">
			<li><a href="/contact-us/">Contact Us</a></li>
			<li><a href="/location/">Location</a></li>
		</ul>
		
		<?php get_search_form(); //includes searchform.php if it exists, if not, this outputs the default search bar ?>	

	</header>