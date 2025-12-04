<?php 

include(locate_template('components/variables/post-variables.php')); ?>

<?php $image_id = $featured_image ? $featured_image : $default_blog_image; ?>


<div class="single-post-tile d-sm-flex">
    <div class="single-post-image-wrapper position-relative"
         style="background-image: url(<?php echo esc_url( wp_get_attachment_image_url( $image_id, 'full' ) ); ?>)">
        <a href="<?php echo esc_url( $permalink ); ?>"
           class="overlay"
           aria-label="Read more about <?php echo esc_attr( $title ); ?>"></a>
    </div>
    <div class="single-post-title-wrapper align-items-center d-flex flex-column justify-content-center">
        <h4 class="mb-0 post-title">
            <a class="color-inherit" href="<?php echo esc_url( $permalink ); ?>"
               aria-label="Post title: <?php echo esc_attr( $title ); ?>">
                <?php echo esc_html( $title ); ?>
            </a>
        </h4>
        <p class="post-excerpt">
            <a class="color-inherit" href="<?php echo esc_url( $permalink ); ?>"
               aria-label="Read the full post: <?php echo esc_attr( $title ); ?>">
                <?php echo $excerpt ?>
            </a>
        </p>
    </div>
</div>
