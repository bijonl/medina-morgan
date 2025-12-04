<?php 
$section_title = 'Related Insights';
$section_title_tag = 'h3'; 
$section_subtitle = ''; 
$recent_posts = get_field('related_insights'); 
$default_blog_page = get_field('default_blog_page', 'options');
$has_title_area = $section_title || $section_subtitle; 
$block = array('id' => 'related-insight'); 
?>
<?php if($recent_posts) { ?>
<section class="recent-posts-section service-block background-secondary <?php echo $padding_class ?>" id="<?php echo $anchor_link ?>">
    <?php if($has_title_area) { 
        include(locate_template('blocks/partials/title-area.php'));
    } ?>
 
        <div class="recent-posts-container container">
            <div class="recent-posts-row row">
                <?php foreach($recent_posts as $id) { ?>
                    <div class="recent-posts-col col-lg-6">
                        <?php include(locate_template('blocks/recent-posts/partials/single-post.php'));  ?>
                    </div>
                <?php } ?>
            </div>
            <?php if($default_blog_page) { ?>
                <div class="button-row row">
                    <div class="button-col col-lg-12 mx-auto text-end">
                        <?php if (!empty($default_blog_page)) { ?>
                            <div class="button-area-wrapper">
                                <a 
                                    href="<?php echo esc_url($default_blog_page); ?>" 
                                    target="<?php echo esc_attr('_self'); ?>" 
                                    class="pw-solid-button pw-black-button"
                                    aria-label="See all insights"
                               
                                >
                                    View All
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>   
            <?php } ?>
         </div>
        <?php wp_reset_postdata(); ?>

</section>
<?php } ?>