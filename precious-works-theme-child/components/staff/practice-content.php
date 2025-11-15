<?php  $title = 'Practice Areas'; 
    $content = ''; 
    $accordion_id = 'accordion-practice-areas';
    ob_start(); ?>
    <ul class="list-unstyled ms-0">
    <?php foreach($practice_areas as $id) { 
        include locate_template('components/variables/service-variables.php'); 
        $admission_term = get_term($admission, 'admissions'); ?> 
        <li class="staff-meta staff-practice-area d-flex justify-content-between">
            <a href="<?php echo $service_permalink ?>" class="mb-0" aria-label="go to <?php echo $service_display_name ?> page">
                <?php echo $service_display_name ;  ?>
        
            </a>
        </li>
    <?php } ?>
</ul>
<?php
$content = ob_get_clean();

include(locate_template('blocks/accordions/partials/single-accordion.php')); ?>