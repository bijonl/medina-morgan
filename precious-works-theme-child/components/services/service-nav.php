<?php if(have_rows('service_navigation_tabs')) { ?>
    <nav class="background-primary single-service-nav">
        <ul class="service-nav-content-wrapper d-sm-flex list-unstyled ms-0 justify-content-evenly">
    <?php while(have_rows('service_navigation_tabs')) {
        the_row(); ?>
     
            <?php $service_navigation_text = get_sub_field('service_navigation_text'); 
            $service_navigation_link = get_sub_field('service_navigation_link');
            
            ?>
            <li class="single-service-nav-link col-sm-4 text-center h3 mb-0">
                <a href="<?php echo $service_navigation_link ?>"
                class="color-inherit">
                    <?php echo $service_navigation_text ?>
                </a>
            </li>       
<?php } ?>
         </ul>
    </nav>
<?php } ?>

