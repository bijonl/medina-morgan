<?php 
include locate_template('components/variables/query-string-variables.php'); 

$all_practices_args = array(
    'post_type' => 'services', 
    'posts_per_page' => -1, 
    'fields' => 'ids', 
    'orderby' => 'title', 
    'order' => 'ASC'
); 

$all_practices = new WP_Query($all_practices_args); 
$default_blog_page = get_field('default_blog_page', 'options'); ?>

<!-- Accessible Checkbox Form -->
<form class="filter-blog-posts-form" id="filter-blog-posts-form" method="get" action="<?php echo esc_url($default_blog_page); ?>" novalidate>
  <!-- Visually-hidden helper for screen readers -->
  <p id="form-instructions" class="sr-only">
    Choose one or more practice areas to filter blogs by.
  </p>


  <?php if($all_practices->have_posts()) { ?>
    <fieldset class="background-secondary" aria-describedby="fieldset-desc" aria-required="true">
    <legend>Filter by Practice Area</legend>

    <p id="fieldset-desc" class="muted mb-0 fieldset-desc">Filter by At Least 1 Practice Area</p>
        <hr>
        <ul class="checkbox-list list-unstyled ms-0" role="list">
            <?php while($all_practices->have_posts()) { 
                $all_practices->the_post(); 
                $id = get_the_id(); 
                $checkbox_id = 'practice-' . $id;
                $checked = ''; 
                if(in_array($id, $filtered_practice_areas)) {
                     $checked = 'checked';
                }
                include locate_template('components/variables/service-variables.php'); ?>

                <li>
                    <input
                    type="checkbox"
                    id="<?php echo $checkbox_id ?>";
                    name="practice_areas[]"
                    value="<?php echo $id ?>"
                    <?php echo $checked ?> />
                    <label for="<?php echo $checkbox_id; ?>"><?php echo esc_html($service_display_name);?></label>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
   
    <!-- Accessible status and error region -->
  </fieldset>

  <button type="submit" class="pw-solid-button pw-black-button">Filter</button>
</form>