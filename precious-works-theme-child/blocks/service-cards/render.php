<?php $services = get_field('services');
include(locate_template('blocks/partials/global-block-variables.php')); 

$has_content = have_rows('services') || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 
$count = 0; 
?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="section-title-wrapper">
        <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    </div>

    <div class="service-glide">
        <div class="glide__track" data-glide-el="track">
            <div class="service-row row glide__slides">
                <?php foreach ($services as $id) { 
                    $count++; 
                    ?>
                        <div class="service-col col glide__slide text-center <?php echo $count % 2 !== 0 ? 'background-tertiary' : '' ?>">
                            <?php include(locate_template('components/variables/service-variables.php')); ?>
                            <article class="service-member-card">
                                <div class="service-image-wrapper">
                                    <?php echo wp_get_attachment_image($service_image_id, 'service-card', false, array('class' => 'mx-auto h-auto')) ?>
                                </div>
                                <div class="service-meta-wrapper mx-auto d-flex justify-content-between align-items-center">
                                    <div class="service-text-wrapper">
                                        <h3 class="h2 service-title"><?php echo $service_display_name ?></h3>
                                        <p><?php echo $quick_service_summary ?></p>
                                    </div>
                                </div>  
                            </article>
                        </div>
                <?php }; ?>
            </div> 
        </div>
         <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="40" height="40" fill="url(#pattern0_4227_362)"/>
                <defs>
                <pattern id="pattern0_4227_362" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_4227_362" transform="scale(0.0104167)"/>
                </pattern>
                <image id="image0_4227_362" width="96" height="96" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAABPUlEQVR4nO3cO04DURQE0RtZeBtESOyRtDvzemZF4FWMheQYIqinmTrS5Fdd/iSWZyRJkiRJkqRjudAHnFlnZpuZK33IWcffn48RwPF3I/Dj70b4H7cfxv9+PmfmlT7yjK/8fWa+ZuadPvKo6vicOj6njs+p43Pq+Jw6PqeOz6njc+r4nDo+p47PqeNz6vicOj6njs+p43Pq+Jw6PqeOz6njc+r4HMcHOT7I8UGOD3L8xX+r+UYeeGTxlc/5cPy1A9wNwH8E3Y3w9/wSXoDvhAUYYQFGWIARFmCEBcQIvBiBFyPwYgRejMCLEXgxAi9G4MUIvBiBFyPwYgRejMCLEXgxAi9G4MUIvBiBFyPwYgRejMCLEXi3XyL4593wO2GbmRf6wLNG2Byfi7A5Phdhc3zWhT5AkiRJkiRJc3oPISE2H64uvoEAAAAASUVORK5CYII="/>
                </defs>
                </svg>
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect x="40" y="40" width="40" height="40" transform="rotate(-180 40 40)" fill="url(#pattern0_4227_363)"/>
                    <defs>
                    <pattern id="pattern0_4227_363" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_4227_363" transform="scale(0.0104167)"/>
                    </pattern>
                    <image id="image0_4227_363" width="96" height="96" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAABPUlEQVR4nO3cO04DURQE0RtZeBtESOyRtDvzemZF4FWMheQYIqinmTrS5Fdd/iSWZyRJkiRJkqRjudAHnFlnZpuZK33IWcffn48RwPF3I/Dj70b4H7cfxv9+PmfmlT7yjK/8fWa+ZuadPvKo6vicOj6njs+p43Pq+Jw6PqeOz6njc+r4nDo+p47PqeNz6vicOj6njs+p43Pq+Jw6PqeOz6njc+r4HMcHOT7I8UGOD3L8xX+r+UYeeGTxlc/5cPy1A9wNwH8E3Y3w9/wSXoDvhAUYYQFGWIARFmCEBcQIvBiBFyPwYgRejMCLEXgxAi9G4MUIvBiBFyPwYgRejMCLEXgxAi9G4MUIvBiBFyPwYgRejMCLEXi3XyL4593wO2GbmRf6wLNG2Byfi7A5Phdhc3zWhT5AkiRJkiRJc3oPISE2H64uvoEAAAAASUVORK5CYII="/>
                    </defs>
                </svg>
            </button>
        </div>
    </div>


</section>

