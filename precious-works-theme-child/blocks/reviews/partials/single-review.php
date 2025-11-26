<article class="masonry-review-card" aria-labelledby="review-<?php echo $review_id; ?>-person">
    <div class="review-content">
        <div class="star-wrapper">
            ★★★★★
        </div>
        <blockquote>
            <?php echo '&ldquo;' . $review . '&rdquo;'; ?>
        </blockquote>
    </div>
    <footer class="review-meta-wrapper d-flex align-items-center">
        <div class="review-meta">
            <?php if ($person) { ?>
                <p id="review-<?php echo $review_id; ?>-person" class="review-meta person mb-0">
                    <?php echo esc_html($person); ?>
                </p>
            <?php } ?>
            <?php if ($position) { ?>
                <p class="review-meta position mb-0">
                    <?php echo esc_html($position); ?>
                </p>
            <?php } ?>
        </div>
    </footer>
</article>
