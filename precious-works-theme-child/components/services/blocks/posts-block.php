<?php 
$section_title = get_sub_field('section_title');
$section_subtitle = get_sub_field('section_subtitle'); 
$recent_posts = get_sub_field('posts'); 
$section_button = get_sub_field('button'); 
?>

<section class="recent-posts-section service-block background-primary">
    <?php if($has_title_area) { 
        include(locate_template('blocks/partials/title-area.php'));
    } ?>
    <?php if($recent_posts) { ?>
        <div class="recent-posts-container container">
            <div class="recent-posts-row row">
                <?php foreach($recent_posts as $id) { ?>
                    <div class="recent-posts-col col-sm-6">
                        <?php include(locate_template('blocks/recent-posts/partials/single-post.php'));  ?>
                    </div>
                <?php } ?>
            </div>
            <?php if($section_button) { ?>
                <div class="button-row row">
                    <div class="button-col col-sm-12 mx-auto text-end">
                        <?php include(locate_template('blocks/partials/button-area.php')); ?>
                    </div>
                </div>   
            <?php } ?>
         </div>
    <?php } ?>
  
</section>