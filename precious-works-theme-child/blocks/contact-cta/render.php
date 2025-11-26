<?php include(locate_template('blocks/partials/global-block-variables.php')); 

$phone_number_title = get_field('phone_number_title');
$phone_number = get_field('phone_number');
$clean_number = preg_replace('/[^0-9\+]/', '', $phone_number); // for tel: link
$email_address_title = get_field('email_address_title');
$email_address = get_field('email_address');
$map_title = get_field('map_title');
$address_text = get_field('address_text');
$address_link = get_field('address_link');

$default_phone_number = get_field('phone_number', 'options');
$default_email_address = get_field('email_address', 'options');
$default_address_line_one = get_field('address_line_one', 'options');
$default_address_line_two = get_field('address_line_two', 'options');
$default_city = get_field('city', 'options');
$default_state = get_field('state', 'options');
$default_zip_code = get_field('zip_code', 'options');
$default_map_link = get_field('map_link', 'options');

$has_content = !empty($phone_number_title) 
                || !empty($phone_number) 
                || !empty($email_address_title) 
                || !empty($email_address) 
                || !empty($map_title) 
                || !empty($address_text) 
                || !empty($address_link) 
                || !empty($section_title);  
                
$has_title_area = !empty($section_title) || !empty($section_subtitle); 


if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="cta-container container">
        <div class="cta-row row align-items-center">
            <?php if($has_title_area) { ?>
            <div class="cta-col col-lg-5 col-xl-4">
                <?php if($section_title) { ?>
                    <div class="cta-title-wrapper">
                        <?php echo pw_seo_heading($section_title, $section_title_tag, 'h2 mb-0') ?>
                    </div>
                <?php } ?>
                <?php if(!empty($section_subtitle)) { ?>
                    <div class="cta-subtitle-wrapper">
                        <?php echo $section_subtitle ?>
                    </div>
                <?php } ?>
            </div>
            <?php } ?>
            <div class="contact-cta-col <?php echo $has_title_area ? 'col-lg-7' : 'col-lg-12' ?> ms-auto">
                <div class="d-block d-sm-flex justify-content-between text-center">
                   
                        <div class="contact-item phone-contact" role="group" aria-label="Phone contact information">
                            <div class="icon" aria-hidden="true">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="50" height="50" fill="url(#pattern0_4301_442)"/>
                                    <defs>
                                        <pattern id="pattern0_4301_442" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_4301_442" transform="scale(0.0104167)"/>
                                        </pattern>
                                        <image id="image0_4301_442" width="96" height="96" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>
                            </div>

                            <?php if (!empty($phone_number_title)) { ?>
                                <div class="title">
                                    <p><?php echo esc_html($phone_number_title); ?></p>
                                </div>
                            <?php }; ?>

                            <div class="content">
                                <p>
                                    <a href="tel:<?php echo esc_html($phone_number) ? esc_html($phone_number) : $default_phone_number; ?>" 
                                    aria-label="Call <?php echo esc_attr($site_name ?? 'our office'); ?>">
                                        <?php echo esc_html($phone_number) ? esc_html($phone_number) : $default_phone_number; ?>
                                    </a>
                                </p>
                            </div>
                        </div>

       
                    <div class="contact-item email-contact text-center">
                        <div class="icon" aria-hidden="true">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="50" height="50" fill="url(#pattern0_4301_441)"/>
                                <defs>
                                <pattern id="pattern0_4301_441" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_4301_441" transform="scale(0.0104167)"/>
                                </pattern>
                                <image id="image0_4301_441" width="96" height="96" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAADlElEQVR4nO3cP2jUYBjH8dRaKaUKHdRBhKJFHKpYHXRwc7LFQcFBBEdXx+rm4OBWVydB/LMqHdXFpYiKWsHBitjBSe0htgpF/UpoWo70vMube968afL7QJZyd+/z5y557pImikRERERERERERERERERERKR8gFHgMTAHLNRsm0tyHw3dhOPAO+rnA3Ci6GIPA3eBkdTf+4FrwDLVt5zk2p+qwUhSm2Ffxd8BfEqC+AlcBvpSjzkAzFBdM3GOqZz7klrENYl9BLb7aMD9FgG9AY6mHtcDXAS+Ux1LwCTQm8r1EPC8xePvWBf/SJvgfgNTwGDqObuBaTa+6TiXVG6DSc5x7v9z2LIBNzIEGu+exls8d2gjb9H6fMabdsXtTFk24LXDO+ZefLyIKoaVY2CcW1avLBdv4KaRHAd6ogoAzgJfHGvwzTKAvJ6kR9aNhJXRMs4hF8tAuvELuApsiTYIYDNwCVjsJnHLgCzMpkfWMmozWjqzDMrKH+AmsDUqGWAAuN5htHRiGZy1z8DpqCSAkxlHSyeWAfr8krPLLFD3vHYCt30lZxmoT40QI2vO0dKJZbBZtPqtqHQjK12Oli65WgadaTGHr+mFj6zYjJZrx64sD7YMPvNiRtPErOXICowBLyyntyxPsoo/12I+knbl882Q5YnOAbdJJNdi1h97F753h1lewCngDsl0tRiwB3hEASMrNqPlU2C/z5o4sVrMYPRrtBtZfb++j5pkYrmYj3coBX7CfNQkyGLABDDfRcHik+BXkm31hHgecQwTZahJ4Yvh4QewoqasLAvked0gi9H9yJpntDxW5poUvhhGJ0GK+qZdRE2CLAbsNTig5hoty1qTYheL1i7uugB87brsK6Nl/MnaZBxjcTUpdDHbkdXb+YZaNCD1s8K8488XZyKPatUAh5H1bzJabos8q10DVsXXXAIvW4TwttvR0kVtG9A0sk4mY+Vy8sko9LqjWjdgFbAv3qIA1IDA1IDA1IDA1IDA1IDA1IDA1IDA1IDA1IDA1IDA1IDA1ICaNSC+V4Ia0CRD/RcjK8nNidQAtwa8j6xkOS8b1Qyd3bJc7FSGBRdqtnUyYX2ZSJVvxGTtmfk/HSb/Qe7zqrWq+AEcNC1+alfUcSKqsSXTXU+bu2fFVyDI+gt+x7wWv6kJvcB54GGOewlVSQN4AJyzvvQxz0VTQzXbBoIVXERERERERERERERERKLM/gEyXv2Vv+QXLQAAAABJRU5ErkJggg=="/>
                                </defs>
                            </svg>
                        </div>
                        <div class="title">
                            <?php if (!empty($email_address_title)) { ?>
                                <p><?php echo esc_html($email_address_title); ?></p>
                            <?php }; ?>
                        </div>
                        <div class="content">
                            <a 
                                href="mailto:<?php echo antispambot(esc_attr($email_address)); ?>" 
                                class="email-link" 
                                aria-label="Send an email to <?php echo esc_attr($email_address); ?>"
                            >
                                <?php echo esc_html($email_address) ?  esc_html($email_address) : $default_email_address; ?>
                            </a>
                        </div>
                    </div>

                    <div class="contact-item map-contact text-center">
                        <div class="icon" aria-hidden="true">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" role="img">
                                <title>Map icon</title>
                                <rect width="50" height="50" fill="url(#pattern0_4301_443)"/>
                                <defs>
                                    <pattern id="pattern0_4301_443" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_4301_443" transform="scale(0.0104167)"/>
                                    </pattern>
                                    <image id="image0_4301_443" width="96" height="96" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAD/ElEQVR4nO3bzWtVRxjH8QFtFFymUTRulIKo+NqKWihpd124qf4XivgSRQTBFmJtKS61rYuWUpR200pLdanBRUEUF77hzhfQ1viC1JTaqF+ZOsJtODPn3pt7z5PM+X1ACGbOeWbmuXfOvJw4JyIiIiIiIiIiIiIiHjADeB/4BPgZuAo8BP4Fnoafr4Tf+TID/pr/Lpb2AauAr4BHtM4n5UtgpXU7phxgOfAb8IKJ8/f4FVhm3a5JD5gJHALG6Dw/XH2hoSkCeAu4SPddABZat3dSAd4G/qQ694F11u2eFIB3gMdNdNoz4DSwHVgLzAbeCP9mh//bEcr4smV8zNWuzng17Nwr6agnwBDQ28J9e8M1oyX3/gNY4Gr8wL1Y0kHHgLkTiDEPOF4S43wtH8xhthPjh5DBgmvmA1uAU8A1/+1oMtaukmHpc1fDef5YovM/KvgkHy26poWYGxNJ8FPUpa4uwiIr5n+ffGBD6iHdYtzd0ajwi6vR9kJshXtsXNnNZTOaNuL/ELmVr9MKlzvg60gH/O3H+IZyHzYznWwj/rzE7Oiwq8GuZmxjbWhcJzWzNmg5AeH+n0Zu9wDocbkKW8pFxhrn+eGBS+Kb4mdQa4BZbdajL/Htes/lKuzVFzk9bqoZmyHdAJZ0qC7DkRj7Xa6AE5FGb28osyXxye9I54c4OyNxfnK5CidZRdY2lDkZKXOow3VZH4lz2eUq7EIW6Wsocz1SZk2H6zInEmfE5Sqc3xbpaSjzV6TMrC7MyIr843IVlvzJBFQlkYCnLlfhoDw5BFUlMQQ9cHV+CFcFeDdSl0suV37DK9LoHQZ1GYzU5YTLlV/kRBp9xqAuZyN12edyBXwQafQY8GaF9UhtRQy4XAHTE2fAQxXW47NIHUZ8HV3OwquGRUb9LmgF8fvDtkaRIy53/hXBxIHM8Qri/xiJ7eu02NVBYjbk7epi3D3E5bsJN57f1Sw5lN/YhZibgOeRmH6FvsjVSXhxisRw8HEHY20rOd7M9wwgxu//AOdI8wfo/RN84MbG/Nd+9683ujri1enX3ZIOGg1nuH0tzvMPJmY7r92ZSIJzmhXdp9yzcIw4GA5T5oRvUU/4eX343XCTL+eO1OplrCaScJvq3FTnF4/XZyvo/OEqFnxTeatiXxNjdzv8PfcC06zbOekBC4HvmxzLy/j1xne1/TuADiTiAHCrzXHerzXU8R18pX0r8G2i078JZfQnqd1EhHW9agMlwBZKgC2UAFsoAbZQAmyhBNhCCbCFEmALJcAWSoAtlABbKAG2UAJsoQTYQgmwhRJgCyXAFkqALZQAWygBtlACbKEE2EIJsIUSYAslwBZKgIiIiIiIiIiIuKnnJdUvATLr3SXdAAAAAElFTkSuQmCC"/>
                                </defs>
                            </svg>
                        </div>
                    <div class="title">
                        <?php if (!empty($map_title)) { ?>
                            <p><?php echo esc_html($map_title); ?></p>
                        <?php }; ?>
                    </div>
                    <div class="content">
                        <?php if (!empty($address_link)) { ?>
                            <a 
                                href="<?php echo esc_url($address_link); ?>" 
                                target="_blank" 
                                rel="noopener noreferrer" 
                                aria-label="Open map location in a new tab"
                            >
                                <?php if($address_text) {
                                    esc_html($address_text); 
                                } else { ?>
                                    <?php echo $address_line_one ?><br>
                                    <?php echo $address_line_two ?><br>
                                    <?php echo $city.', '.$state.' '.$zip_code ?>
                                <?php } ?>
                            </a>
                        <?php } else { ?>
                            <?php if($address_text) {
                                    esc_html($address_text); 
                                } else { ?>
                                    <?php echo $default_address_line_one.', '.$default_address_line_two ?>,<br>
                                    <?php echo $default_city.', '.$default_state.' '.$default_zip_code ?>
                            <?php } ?>
                        <?php }; ?>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</section>