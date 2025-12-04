<?php 
$phone_number     = get_field('phone_number', 'options');
$email_address    = get_field('email_address', 'options');
$address_line_one = get_field('address_line_one', 'options');
$address_line_two = get_field('address_line_two', 'options');
$city             = get_field('city', 'options');
$state            = get_field('state', 'options');
$zip_code         = get_field('zip_code', 'options'); 
$map_link         = get_field('map_link', 'options'); 
?>

<div class="contact-info-wrapper" role="contentinfo" aria-label="Contact Information">

    <!-- Phone -->
    <div class="phone-number-wrapper contact-meta-wrapper">
        <p class="mb-0">
            <a 
                href="tel:<?php echo esc_attr($phone_number); ?>" 
                class="color-inherit"
                aria-label="Phone number: <?php echo esc_attr($phone_number); ?>">
                <?php echo esc_html($phone_number); ?>
            </a>
        </p>
    </div>

    <!-- Address -->
    <div class="address-wrapper contact-meta-wrapper">
        <p class="mb-0">
            <a 
                href="<?php echo esc_url($map_link['url']); ?>" 
                class="color-inherit"
                aria-label="View map for address: <?php echo esc_attr($address_line_one . ', ' . $city); ?>">
                <?php echo esc_html($address_line_one); ?><br>
                <?php echo esc_html($address_line_two); ?><br>
                <?php echo esc_html($city . ', ' . $state . ' ' . $zip_code); ?>
            </a>
        </p>
    </div>

    <!-- Email -->
    <div class="email-wrapper contact-meta-wrapper">
        <p class="mb-0">
            <a 
                href="mailto:<?php echo esc_attr($email_address); ?>" 
                class="color-inherit"
                aria-label="Email address: <?php echo esc_attr($email_address); ?>">
                <?php echo esc_html($email_address); ?>
            </a>
        </p>
    </div>

    <?php if (have_rows('social_media_footer', 'options')) { ?>
        <nav class="footer-social-col col" role="navigation" aria-label="Social Media Links">
            <?php include locate_template('components/footer/social-icons.php'); ?>
        </nav>
    <?php }; ?>

</div>
