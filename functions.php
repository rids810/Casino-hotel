<?php 

add_action( 'after_setup_theme', 'casino_slug_setup' );


function casino_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-line-height' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'casino-featured-image', 2000, 1200, true );
	add_image_size( 'casino-thumbnail-avatar', 100, 100, true );
	$GLOBALS['content_width'] = 525;
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);

	
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
	);

	// Add theme support for Custom Logo.
	add_theme_support(
		'custom-logo',
		array(
			'width'      => 250,
			'height'     => 250,
			'flex-width' => true,
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'editor-styles' );

	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'responsive-embeds' );

}
add_action( 'after_setup_theme', 'casino_setup' );

function casino_slug_setup() {
	add_theme_support( 'wp-block-styles' );
}

function casino_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'casino' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'casino' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'casino' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'casino' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'casino_widgets_init' );

?>
