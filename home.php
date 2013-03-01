<?php
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'child_grid_loop' );
/** Add support for Genesis Grid Loop **/
function child_grid_loop() {
if ( function_exists( 'genesis_grid_loop' ) ) {
genesis_grid_loop( array(
'features' => 2,
'feature_image_size' => 0,
'feature_image_class' => 'alignleft post-image',
'feature_content_limit' => 0,
'grid_image_size' => 'grid-thumbnail',
'grid_image_class' => 'alignleft post-image',
'grid_content_limit' => 0,
'more' => __( '[Read More...]', 'genesis' ),
'posts_per_page' => 4,
) );
} else {
genesis_standard_loop();
}
}
/** Remove the post meta function **/
remove_action( 'genesis_after_post_content', 'genesis_post_meta' );
genesis();