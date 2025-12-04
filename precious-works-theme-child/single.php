<?php echo get_header(); ?>
<?php $id = get_the_id(); 
include locate_template('components/variables/post-variables.php'); ?>



<section class="single-blog-post-section" id="blog-post-content">
    <div class="single-blog-post-container container">
      <div class="single-blog-post-row row">
        <div class="single-blog-post-author-col col-lg-3 me-auto order-last order-lg-first">
          <?php include locate_template('components/blog/single-post-author.php'); ?>
          <?php include locate_template('components/blog/single-post-footer.php'); ?>
        </div>
        <div class="single-blog-post-col col-lg-8 order-first order-lg-last">
            <?php include locate_template('components/blog/single-post-hero.php'); ?>
            <?php include locate_template('components/blog/single-post-content.php'); ?>
        </div>
      </div>
    </div>
</section>
<?php include locate_template('components/blog/single-post-related-posts.php'); ?>

<?php echo get_footer(); ?>