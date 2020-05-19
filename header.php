<!DOCTYPE html>
<html <?php language_attributes(); ?>">
  <head>
	<!-- bootstrap -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- OpenGraph and Twitter cards -->
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php site_url(); ?>">
	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/gottydbz.jpeg">
	<meta property="og:description" content="My art journey began in 2016, when my lovely wife purchased an iPad Pro.">
	<meta property="og:image:height" content="3299">
	<meta property="og:image:width" content="4946">
	<meta property="twitter:card" content="gallery">
	<meta property="twitter:title" content="GottyJ.Art">
	<meta property="twitter:description" content="My art journey began in 2016, when my lovely wife purchased an iPad Pro.">
	<meta property="twitter:url" content="<?php site_url(); ?>">
	<meta property="twitter:image" content="<?php bloginfo('template_directory'); ?>/img/gottydbz.png">

	<!-- SEO -->
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<!-- Basic -->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favsm.png">
			
	<!-- WordPress -->	
	<?php wp_head(); ?>
  </head>
  <body data-spy="scroll" data-target="#nav--header" data-offset="62">

	<!-- sticky navigation -->
    <nav id="nav--header" class="navbar sticky-top navbar-expand-md">
		<div class="container">
			<a href="<?php echo trailingslashit(get_site_url());?>" class="navbar-brand"><picture>
				<source srcset="<?php bloginfo('template_directory'); ?>/img/favart.webp" width="36" height="36" type="image/webp">
				<img src="<?php bloginfo('template_directory'); ?>/img/favart.png" width="36" height="36" alt="GJ.Art">
			</picture></a>
			<div class="bd-navbar-nav nav mr-auto order-1">
				<a href="<?php if(!is_home()) echo trailingslashit(get_site_url()); ?>#shop" class="nav-item nav-link"><i class="fas fa-shopping-cart"></i> <span class="d-none d-md-inline">Shop</span></a>
			  <a href="<?php if(!is_home()) echo trailingslashit(get_site_url()); ?>#blog" class="nav-item nav-link"><i class="fas fa-book"></i> <span class="d-none d-md-inline">Blog</span></a>
				<a href="<?php if(!is_home()) echo trailingslashit(get_site_url()); ?>#about" class="nav-item nav-link"><i class="fas fa-user"></i> <span class="d-none d-md-inline">About</span></a>
				<a href="https://gottyjart.square.site/gallery" class="nav-item nav-link"><i class="fas fa-images"></i> <span class="d-none d-lg-inline">Gallery</span> <i class="fas fa-external-link-square-alt"></i></a>
			</div>
	
			<div class="order-last order-md-2 col-12 col-md text-right pr-0 pr-md-3">
				<?php get_search_form(); ?>
			</div>

			<!-- hamburger -->
			<button class="navbar-toggler order-3" type="button" data-toggle="collapse" role="button" data-target="#nav--header__sub" aria-controls="nav--header__sub" aria-expanded="false" aria-label="Toggle more navigation">
				<i class="fas fa-bars"></i>
			</button>
	
			<!-- extra div prevents lag on collapse -->
			<div class="collapse ml-auto order-4" id="nav--header__sub">
				<div class="nav ml-auto" role="navigation">
					<a class="nav-item nav-link" href="https://www.facebook.com/GottyJArt-1572905736106586/"><i class="fab fa-facebook-square fa-fw"></i><span class="d-none"> Facebook</span></a>
					<a class="nav-link nav-item" href="https://www.instagram.com/gottyj.art/"><i class="fab fa-instagram fa-fw"></i><span class="d-none"> Instagram</span></a>
					<a class="nav-link nav-item" href="https://www.youtube.com/channel/UCOQx7_JjPdjXEr7fyO6kx8w"><i class="fab fa-youtube fa-fw"></i><span class="d-none"> YouTube</span></a>
					<a class="nav-link nav-item" href="https://www.deviantart.com/gottyj"><i class="fab fa-deviantart fa-fw"></i><span class="d-none"> DeviantArt</span></a>
				</div>
			</div>
		
		</div>
	</nav>
	
	<div><ul class="nav"><li class="nav-item"><a class="nav-link" href="/blog/blog-2/">a Blog page</a></li>
		<li class="nav-item"><a class="nav-link" href="/blog/front-page/">Front Page</a></li>
		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="/blog/about-2/">About The Tests</a>
			<ul class="dropdown-menu">
				<li class="nav-item dropdown-item"><a class="nav-link" href="/blog/about-2">About The Tests</a></li>
				<div class="dropdown-divider"></div>
				<li class="nav-item dropdown-item"><a class="nav-link" href="/blog/about-2/page-image-alignment/">Page Image Alignment</a></li>
				<li class="nav-item dropdown-item"><a class="nav-link" href="/blog/about-2/page-markup-and-formatting/">Page Markup And Formatting</a></li>
				<li class="nav-item dropdown-item"><a class="nav-link" href="/blog/about-2/clearing-floats/">Clearing Floats</a></li>
				<li class="nav-item dropdown-item"><a class="nav-link" href="/blog/about-2/page-with-comments/">Page with comments</a></li>
				<li class="nav-item dropdown-item"><a class="nav-link" href="/blog/about-2/page-with-comments-disabled/">Page with comments disabled</a></li>
			</ul>
		</li>
		<li class="nav-item"><a class="nav-link" href="/blog/level-1/">Level 1</a>
			<ul class="dropdown-menu">
				<li class="nav-item"><a class="nav-link" href="/blog/level-1/level-2/">Level 2</a>
					<ul class="sub-menu">
						<li class="nav-item"><a class="nav-link" href="/blog/level-1/level-2/level-3/">Level 3</a></li>
						<li class="nav-item"><a class="nav-link" href="/blog/level-1/level-2/level-3a/">Level 3a</a></li>
						<li class="nav-item"><a class="nav-link" href="/blog/level-1/level-2/level-3b/">Level 3b</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="/blog/level-1/level-2a/">Level 2a</a></li>
				<li class="nav-item"><a class="nav-link" href="/blog/level-1/level-2b/">Level 2b</a></li>
			</ul>
		</li>
		<li class="nav-item"><a class="nav-link" href="/blog/lorem-ipsum/">Lorem Ipsum</a></li>
		<li class="nav-item"><a class="nav-link" href="/blog/page-a/">Page A</a></li>
		<li class="nav-item"><a class="nav-link" href="/blog/page-b/">Page B</a></li>
	</ul></div>	
	
	<header id="brand" class="text-center">
		<h1>
			<picture>
				<source srcset="<?php bloginfo('template_directory'); ?>/img/gottydark.webp" type="image/webp" class="img-fluid">
				<img src="<?php bloginfo('template_directory'); ?>/img/gottydark.png" alt="GottyJ.Art" class="img-fluid">
			</picture>
		</h1>
	</header>