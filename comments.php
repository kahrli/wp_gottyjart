<?php
if ( post_password_required() )
    return;
?>
 
    <?php if ( have_comments() ) : ?>
		<article id="comments" class="comments-area container">
 

        <h2 class="comments-title">
            <?php
                comments_number(); echo ' on '; the_title();
            ?>
        </h2>
 
        <ul class="comment-list">
            <?php
                wp_list_comments(array('short_ping' => true));
            ?>
        </ul><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
				
        <nav class="navigation comment-navigation d-flex" role="navigation">
					<ul class="pagination pagination-lg mx-auto">
						<?php $page = intval(get_query_var('cpage'));
							if(!$page)
								$page = 1; 
							$next = $page+1; 
							$max_page = $wp_query -> max_num_comment_pages;
							if(empty($max_page))
								$max_page = get_comment_pages_count();
							?>
            <li class="nav-previous page-item
							<?php if( $page <= 1): ?>
								disabled"><a class="page-link">&larr; Older Comments</a><?php else: ?>
								page-link"><?php previous_comments_link( '&larr; Older Comments' ); ?>
								<?php endif; ?></li>
            <li class="nav-next page-item 
							<?php if( $next > $max_page): ?>
							disabled"><a class="page-link">Newer Comments &rarr;</a><?php else: ?>
							page-link"><?php next_comments_link( 'Newer Comments &rarr;' ); ?>
							<?php endif; ?></li>
					</ul>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments">Comments are closed.</p>
        <?php endif; ?>
 
 </article>
    <?php endif; // have_comments() ?>
 
 <?php if( comments_open() ): ?>
 <article id="comment-form" class="container">
	<div class="row">
		<div id="respond" class="comment-respond col-md-8">
		<?php 
			$commenter = wp_get_current_commenter();
			$comment_args = array(
				'fields' => array(
					'author' => 
						'<div class="comment-form-author form-group"><label for="author">Name <span class="required">*</span></label>
							<input id="author" placeholder="Name" class="form-control" name="author" type="text" 
								value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245" required placeholder="Name" /></div>',
					'email' => 
						'<div class="comment-form-email form-group"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" 
							value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes" required class="form-control" placeholder="Email" />
							<small id="email-notes">Your email address will not be published.</small></div>',				
				),
				'comment_notes_before' => null,
				'comment_field' => '<div class="comment-form-comment form-group"><label for="comment">Comment</label> <textarea id="comment" placeholder="Enter your comment here..." name="comment" cols="45" rows="8" maxlength="65525" required="required" class="form-control"></textarea></div>',
				'class_submit' => 'btn submit btn-primary',
				'cancel_reply_link' => '<br>Cancel reply',
			);
			
			comment_form($comment_args); 
		?>
		</div>
		
		<div class="col-md-4 d-none d-md-flex align-items-center">
			<div>
			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/form.png" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</article><!-- #comments -->
<?php endif; ?>