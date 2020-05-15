<div <?php post_class('card blog-post mb-4 justify-content-between'); ?>>
	<?php echo get_the_post_thumbnail(null, null, array('class' => 'card-img-top')); ?>
	<h3 class="card-title card-header align-items-center d-flex position-relative" style="height:4em;">
		<a href="<?php the_permalink(); ?>" class="stretched-link">
			<?php the_title(); ?>
		</a>
	</h3>
	<div class="card-body">
	
	<?php if(is_search()): 
	
		$excerpt = preg_replace('/' . get_search_query() . '[s]?/i', '<mark>\0</mark>', get_the_excerpt());
		echo $excerpt;
		
	else: ?>
	<?php the_excerpt(); ?>
	<?php endif; ?>
	</div>
	<div class="card-footer text-muted "><?php the_date(); ?> by <?php the_author_link(); ?><br>
		<?php comments_number(); ?></div>
</div>