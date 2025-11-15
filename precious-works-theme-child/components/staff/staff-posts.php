<?php if($insights) { ?>
<section class="staff-posts-content-section background-secondary">
    <div class="single-staff-posts-container container">
        <div class="single-staff-post-title-row row">
            <div class="single-staff-title-col col-12">
                <h2 class="h1">More About & By <?php echo $first_name ?></h2>
            </div>
        </div>
        <div class="single-staff-posts-content-row row gx-5">
            <?php foreach($insights as $id) { ?>
                <div class="single-post-tile-col col-6">
                    <?php include(locate_template('/blocks/recent-posts/partials/single-post.php')); ?>
                </div>
            <?php } ?>
        </div>
</section>
<?php } ?>