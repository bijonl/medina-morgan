<article class="single-staff-content-container container">
    <div class="single-staff-content-row row">
        <div class="single-staff-title-col col-12">
            <h2 class="h1"><?php echo $bio_title ?></h2>
        </div>

        <div class="single-staff-bio-col col-lg-6">
            <?php echo $biography ?>
        </div>
        <div class="single-staff-accordion-col ms-auto col-lg-5">
            <div class="single-staff-accordion-wrapper">
                <?php if(have_rows('education')) {
                    include locate_template('components/staff/education-content.php'); 
                }

                if(have_rows('bar_admissions')) {
                     include locate_template('components/staff/admission-content.php');      
                }

                if(!empty($practice_areas)) {
                     include locate_template('components/staff/practice-content.php');         
                } ?>
            </div>
        </div>
    </div>
</article>