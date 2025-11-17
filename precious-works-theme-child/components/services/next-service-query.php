<?php // 1. Get all services in alphabetical order
wp_reset_postdata(); 
$all_services = get_posts(array(
    'post_type'      => 'services',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
    'fields'         => 'ids',
));

// 2. Find the index of the current service
$index = array_search($id, $all_services);

// 3. Determine the next service (alphabetically)
$next_id = false;
if ($index !== false && isset($all_services[$index + 1])) {
    $next_id = $all_services[$index + 1];
} 

// 4. Output the link (if one exists)
if ( $next_id ) {
    $next_title = get_the_title( $next_id ); ?>
    <div aria-label="Next service" class="next-service-nav">
        <a href="<?php echo esc_url( get_permalink( $next_id ) ); ?>"
           aria-label="Go to next service: <?php echo esc_attr( $next_title ); ?>"
           class="text-decoration-underline next-service-link">
            Next Practice Area: <?php echo esc_html( $next_title ) ?> <?php echo '>' ?>
        </a>
    </div>
<?php }; ?>