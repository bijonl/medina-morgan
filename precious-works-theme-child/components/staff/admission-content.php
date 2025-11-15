<?php  $title = 'Admissions'; 
    $content = ''; 
    $accordion_id = 'accordion-admission';
    ob_start(); ?>
    <ul class="list-unstyled ms-0">
    <?php while(have_rows('bar_admissions')) { 
        the_row(); 
        $admission = get_sub_field('admission'); 
        $admission_term = get_term($admission, 'admissions'); ?> 
        <li class="single-edu d-flex justify-content-between">
            <p class="edu-meta admissions mb-0">
                <?php echo $admission_term->name;  ?>
        
            </p>
        </li>
    <?php } ?>
</ul>
<?php
$content = ob_get_clean();

include(locate_template('blocks/accordions/partials/single-accordion.php')); ?>