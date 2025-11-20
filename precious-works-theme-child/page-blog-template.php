<?php /**
 * Template Name: Top Level Blog Page
*/  

include locate_template('components/variables/query-string-variables.php'); 

$meta_query_array = array(); 

if($has_filters) {
    $meta_query_array = array(
        'relation' => 'OR',
    );

    foreach ($filtered_practice_areas as $id) {
        $meta_query_array[] = array(
            'key'     => 'practice_areas_crosslinks',
            'value'   => '"' . $id . '"', // match serialized array
            'compare' => 'LIKE',
        );
    }
}

$blog_args = array(
    'post_type' => 'post', 
    'posts_per_page' => -1, 
    'post_status' => 'publish', 
    'fields' => 'ids', 
    'meta_query' => $meta_query_array 
); 

$id = get_the_id(); 
$blogs = new WP_Query($blog_args); 
$blog_title = get_the_title(); 
$blog_intro = get_field('blog_page_intro');
$blogs_per_row = 1;  
$featured_image = get_the_post_thumbnail_url($id)



?>

<?php echo get_header(); ?>
    <section class="blog-archive-hero-section" id="blog-archive-hero" style="background-image:url(<?php echo $featured_image ?>)">
        <div class="blog-archive-container container h-100">
          <div class="blog-archive-row row h-100 align-items-center">
            <div class="blog-archive-col col">
                <h1 class="mb-0"><?php echo $blog_title ?></h1>
                <p class="mb-0"><?php echo $blog_intro ?></p>
            </div>
          </div>
        </div>
    </section>

    <section class="blog-archive-content-section" id="blog-content-section">
        <div class="blog-posts-container container">
          <div class="blog-posts-row row">
                <div class="blog-posts-filter-col col-sm-3">
                    <?php include locate_template('components/blog/archive-blog-filter.php'); ?>
                </div>
                <div class="blog-posts-col col-sm-8 ms-auto">
                    <?php if($blogs->have_posts()) {
                        while($blogs->have_posts()) { 
                            $blogs->the_post(); 
                            $id = get_the_id(); 
                            include locate_template('components/variables/post-variables.php'); ?>
                            
                                <?php include locate_template('components/blog/archive-blog-tile.php'); ?>
                    
                    <?php wp_reset_postdata(); 

                        }
                        wp_reset_postdata(); 
                    } ?>
                </div>
          </div>
        </div>
    </section>



<?php echo get_footer() ?>
