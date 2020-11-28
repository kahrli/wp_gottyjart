<?php 
	add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	
	function add_theme_scripts() {
		wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',array(), '4.4.1' );

		wp_enqueue_style( 'gottyj-style', get_stylesheet_uri(),array('light-colors','dark-colors','bootstrap'));
		wp_enqueue_style( 'light-colors', get_theme_file_uri('/css/light.css'));
		wp_enqueue_style( 'dark-colors', get_theme_file_uri('/css/dark.css'), array('light-colors'), false, '(prefers-color-scheme: dark)' );
		wp_enqueue_style( 'small-screen-plus', get_theme_file_uri('/css/576.css'), array('gottyj-style'), false, '(min-width: 576px)' );
		wp_enqueue_style( 'medium-screen-plus', get_theme_file_uri('/css/768.css'), array('gottyj-style'), false, '(min-width: 768px)' );
		
		wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/8218aaee33.js');
		wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '1.16.0');
		wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery','popper'), '4.4.1');
		wp_enqueue_script( 'hamburger', get_theme_file_uri('/js/hamburger.js'), array('bootstrap'));
		wp_enqueue_script( 'dropshadow-nav', get_theme_file_uri('/js/dropshadow-nav.js'));

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

	}
	
	function different_posts_per_page( $query ) {
		if($query -> is_main_query() && $query -> is_home()) {
			$query -> query_vars['posts_per_page'] = 2;
		}
		return;
	}
	
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
	add_action( 'pre_get_posts', 'different_posts_per_page' );
	
?>