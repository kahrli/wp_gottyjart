<form action="<?php echo trailingslashit(get_site_url()); ?>" method="get">
		<input type="text" placeholder="Search" name="s" role="search" id="search" value="<?php the_search_query(); ?>">
		<button type="submit" class="btn-primary btn"><i class="fas fa-search"></i> <span class="d-none">Search</span></button>
</form>