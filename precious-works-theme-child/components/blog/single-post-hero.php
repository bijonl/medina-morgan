 <div class="single-blog-hero-container container">
    <div class="single-blog-hero-row row">
        <div class="single-blog-hero-col col">
            <div class="post-meta-wrapper text-start">
                <div class="title-wrapper">
                    <h1 class="mb-0"><?php echo $title ?></h1>
                </div>
                <div class="post-byline-wrapper d-flex">
                    <p class="mb-0 pe-1"><?php echo $publish_date ?> • </p>
                    <p class="mb-0"><?php echo $author_display_name ? $author_display_name : $full_name ?> | </p>
                    <?php if (!empty($terms)) { ?>
                        <ul class="term-wrapper">
                            <?php foreach ($terms as $term) {
                                if ($term->term_id === 1) continue; ?>
                                <li class="single-term">
                                    <?php echo esc_html($term->name); ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                    <div class="practice-area-crosslink-wrapper ms-2">
                        <?php if ($practice_areas_crosslinks) {

                            $links = [];

                            foreach ($practice_areas_crosslinks as $id) {
                                include locate_template('components/variables/service-variables.php');

                                $name = esc_html($service_display_name);
                                $link = esc_url(get_permalink($id));

                                // Build each anchor tag
                                $links[] = '<a class="text-decoration-underline" href="' . $link . '" aria-label="View practice area: ' . $name . '">' . $name . '</a>';
                            }
                            // Join with commas
                            echo implode(', ', $links); 
                        }
                        ?>
                    </div>
            </div>
        </div>
    </div>
</div>