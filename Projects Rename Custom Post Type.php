function movies_register_post_type() {
register_post_type(
'project',
array(
'labels' => array(
'name' => __('Videos'),
'singular_name' => __('Video')
),
'public' => true,
'has_archive' => true,
'rewrite' => array(
'slug' => 'videos'
)
)
);
}
add_action('wp_loaded', 'movies_register_post_type');
