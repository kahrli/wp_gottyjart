<?php get_header(); ?>
	
<article id="blog" class="container">
	<?php if(have_posts()) { ?>
	<h2>Search results for <span class="text-primary"><?php the_search_query(); ?></span></h2>
	<div class="d-sm-block d-xl-flex">
		<div class="d-flex align-items-center mx-auto display-2">
			<?php previous_posts_link('<i class="fas fa-chevron-left"></i> <span class="d-xl-none">Back</span>'); ?>
		</div>
		<div class="card-deck">
			<?php while(have_posts()): the_post();
				get_template_part('content',get_post_format());
				endwhile; ?>
		</div>
		<div class="d-flex align-items-center mx-auto display-2">
			<?php next_posts_link('<span class="d-xl-none">Next</span> <i class="fas fa-chevron-right"></i>'); ?>
		</div>
	</div>
	<?php } else { ?>
	<div class="row">
		<div class="col-lg-3">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/search.png" class="img-fluid">
		</div>
		<div class="col-lg-9 my-auto">
			<h2>No results found</h2>
			<h3>We couldn't find anything about <span class="text-primary"><?php the_search_query(); ?></span>.</h3>
			<p class="lead">Maybe you'd prefer some ramen instead?</p>
		</div>
	<?php } ?>
</article>
	
<?php get_footer(); ?>