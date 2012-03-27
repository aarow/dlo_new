<?php

//register the sidebar
register_sidebars(1, array('name'=>'Instagram Widget Section'));

// register the main menu
register_nav_menu( 'primary', 'Primary Menu' );

// add featured image to posts
add_theme_support( 'post-thumbnails', array( 'post' ) );
set_post_thumbnail_size( 200,200); // Normal post thumbnails

// utilize excerpt field for post lists
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<a href="'. get_permalink($post->ID) . '" class="post-excerpt-link"> Read More...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

?>