<?php echo get_header(); ?>
<?php $id = get_the_id(); 
include locate_template('components/variables/post-variables.php'); ?>



<section class="single-blog-post-section" id="blog-post-content">
    <div class="single-blog-post-container container">
      <div class="single-blog-post-row row">
        <div class="single-blog-post-author-col col-sm-3 me-auto">
          <?php include locate_template('components/blog/single-post-author.php'); ?>
          <?php include locate_template('components/blog/single-post-footer.php'); ?>
        </div>
        <div class="single-blog-post-col col-sm-8">
            <?php include locate_template('components/blog/single-post-hero.php'); ?>
            <?php include locate_template('components/blog/single-post-content.php'); ?>
        </div>
      </div>
    </div>
</section>
<?php include locate_template('components/blog/single-post-related-posts.php'); ?>
<section




<?php echo get_footer(); ?>