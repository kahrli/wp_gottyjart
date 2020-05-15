<?php get_header(); ?>

<?php if(is_home()): ?>
	
<article id="shop">
	<div class="container">
	<h2>Shop</h2>
	<div class="card-deck justify-content-around">
		<div class="card card--shop mb-4" id="square" 
			itemscope itemtype="https://schema.org/Store">
			<div class="card-body">
				<h3 class="card-title">
					<a href="https://gottyjart.square.site/s/shop" class="stretched-link" 
						itemprop="brand name">
						Square</a></h3>
				<link href="
					<?php echo get_bloginfo('template_directory'); ?>/img/shop/square.jpg"
					itemprop="image">
				<meta itemprop="priceRange" content="$10-$40">
				<p class="card-subtitle" itemprop="description">Prints direct from GottyJ</p>
			</div>
			<div class="card-footer" itemprop="description">
				Commissions and multiple sizes available!
			</div>
		</div>
		<div class="card card--shop mb-4" id="displate" itemscope itemtype="https://schema.org/Store">
			<div class="card-body">
				<h3 class="card-title">
					<a href="https://displate.com/gottyj45" class="stretched-link" itemprop="brand name">
					Displate</a></h3>
				<link href="<?php echo get_bloginfo('template_directory'); ?>/img/shop/displate.jpg" itemprop="image">
				<meta itemprop="priceRange" content="$44+">
				<p class="card-subtitle" itemprop="description">Metal posters</p>
			</div>
			<div class="card-footer" itemprop="description">Durable prints designed to last!</div>
		</div>
		<div class="card card--shop mb-4" id="teepublic" itemscope itemtype="https://schema.org/ClothingStore">
			<div class="card-body">
				<h3 class="card-title">
					<a href="https://www.teepublic.com/user/gottyjart" class="stretched-link" itemprop="brand name">
					Tee<wbr>Public</a></h3>
				<link href="<?php echo get_bloginfo('template_directory'); ?>/img/shop/teepublic.jpg" itemprop="image">
				<meta itemprop="priceRange" content="$10-$30">
				<p class="card-subtitle" itemprop="description">T-shirts of GottyJ's work</p>
			</div>
			<div class="card-footer" itemprop="description">
					Choose your own size and color!</div>
		</div>
		<div class="w-100 d-none d-sm-block d-md-none"></div>
		<div class="card card--shop mb-4" id="myanimix" itemscope itemtype="https://schema.org/Store">
			<div class="card-body">
				<h3 class="card-title">
					<a href="https://www.myanimix.com" class="stretched-link" itemprop="brand name">
						My Animix</a></h3>
				<link href="<?php echo get_bloginfo('template_directory'); ?>/img/shop/myanimix.jpg" itemprop="image">
				<meta itemprop="priceRange" content="$10-$40">
				<p class="card-subtitle" itemprop="description">A local anime shop</p>
			</div>
			<div class="card-footer" itemprop="description">Now selling online merchandise!</div>
		</div>
	</div></div>
</article>

<?php endif; ?>

	
<article id="blog" class="container">
	<h2>Blog</h2>
	<div class="d-sm-block d-xl-flex">
		<div class="d-flex align-items-center mx-auto display-2">
			<?php previous_posts_link('<i class="fas fa-chevron-left"></i> 
				<span class="d-xl-none">Back</span>'); ?>
		</div>
		<div class="card-deck">
			<?php while(have_posts()): the_post();
				get_template_part('content',get_post_format());
				endwhile; ?>
		</div>
		<div class="d-flex align-items-center mx-auto display-2">
			<?php next_posts_link('<span class="d-xl-none">Next</span> 
				<i class="fas fa-chevron-right"></i>'); ?>
		</div>
	</div>
</article>

<?php if(is_home()): ?>
	
<article id="about" class="container">
	<div class="row">
	<div class="col-lg-6 mr-0 pr-0 mb-5">
		<h2>About</h2>
		<p>I'm a self-taught Artist from Wisconsin, and my art journey began in 2016, when my lovely wife purchased an iPad Pro for my birthday. I’ve always loved anime and manga and have always wanted to learn how to draw all the amazing characters I saw. However I never thought I had the ability until I got that tablet and set out to learn. </p>

		<p>Since then, through hard work and daily practice (and fun!), I not only sell my art online, as you will see on this lovely website, but I also sell my fan art at a local anime store in Kenosha, WI as well as hosted my own Artist Alley Booth at the 2017 Anime Milwaukee Convention.</p>

		<p>I do most -- if not all my art -- on my trusty iPad. I mainly create 8.5x11 and 11x17 poster prints of my work to sell online.  Additionally I partner with Displate so that people can get metal prints of my work and I also occasionally print my work on canvas by request!</p>

		<p>Commissions are always welcome!</p>
	</div>
	<div class="col-lg-6 mr-0 pr-0 align-bottom mt-auto text-right">
		<picture>
			<source srcset="<?php echo get_bloginfo('template_directory'); ?>/img/aboutn.webp" media="(min-width:992px)" class="img-fluid" type="image/webp">
			<source srcset="<?php echo get_bloginfo('template_directory'); ?>/img/about.webp" class="img-fluid" type="image/webp">
			<source srcset="<?php echo get_bloginfo('template_directory'); ?>/img/aboutn.png" media="(min-width:992px)" class="img-fluid">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/about.png" alt="" class="img-fluid">
		</picture>
	</div></div>
</article>

<?php endif; ?>
	
<?php get_footer(); ?>