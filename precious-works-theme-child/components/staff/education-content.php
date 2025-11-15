<?php $title = 'Education'; 
    $content = ''; 
    $accordion_id = 'accordion-education';
    ob_start(); ?>
    <ul class="list-unstyled ms-0">
    <?php while(have_rows('education')) { 
        the_row(); 
        $school = get_sub_field('school'); 

        $school_term = get_term($school, 'education'); 

        $degree = get_sub_field('degree');
        $year = get_sub_field('year'); ?> 

        <li class="single-edu d-flex justify-content-between">
            <p class="edu-meta school mb-0">
                <?php 
                echo $school_term->name;  
                echo !empty($degree) ? ', ' : ''; 
                echo !empty($degree) ? $degree : ''; ?>
        
            </p>
            <p class="edu-meta year">
                <?php echo $year ?>
            </p>
        </li>
    <?php } ?>
</ul>
<?php
$content = ob_get_clean();

include(locate_template('blocks/accordions/partials/single-accordion.php')); ?>