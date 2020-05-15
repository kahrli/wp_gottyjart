<article class="blog container">
	<?php if(has_post_thumbnail()): ?>
		<div class="row mb-2">
			<div class="col-md-4 text-center">
				<?php echo get_the_post_thumbnail(null,null,array( 'class' => 'img-fluid')); ?>
			</div>
			<div class="col-md-8 my-auto">
		<?php endif; ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="text-muted mb-4"><strong><?php the_date(); ?> by <?php the_author_link(); ?> 
			<?php if(get_comments_number() || comments_open()): echo " | "; comments_number(); 
				else: echo " | Comments disabled."; endif; ?></strong></div>
		<?php if(has_post_thumbnail()): ?>
			</div>
		</div>
		<?php endif; ?>
	<?php the_content(); ?>	
	<div class="text-muted"><?php if(has_tag()) the_tags(); ?>
		<?php if(has_category()): 
			echo "<br>Categories: "; the_category(', '); 
		endif;?></div>
</article>