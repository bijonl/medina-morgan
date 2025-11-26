<?php $phone_number = get_field('phone_number', 'options');
$email_address = get_field('email_address', 'options');
$address_line_one = get_field('address_line_one', 'options');
$address_line_two = get_field('address_line_two', 'options');
$city = get_field('city', 'options');
$state = get_field('state', 'options');
$zip_code = get_field('zip_code', 'options'); ?>

<div class="contact-info-wrapper">
    <div class="phone-number-wrapper contact-meta-wrapper">
        <p class="mb-0">
            <a 
                href="tel:<?php echo $phone_number ?>" 
                class="color-inherit">
                <?php echo $phone_number ?>
            </a>
        </p>
    </div>
    <div class="address-wrapper contact-meta-wrapper">
        <p class="mb-0">
            <?php echo $address_line_one ?><br>
            <?php echo $address_line_two ?><br>
            <?php echo $city.', '.$state.' '.$zip_code ?>
        </p>
    </div>
        <div class="email-wrapper contact-meta-wrapper">
          <p class="mb-0">
            <a 
                href="mailto:<?php echo $email_address ?>" 
                class="color-inherit">
                <?php echo $email_address ?>
            </a>
        </p>
    </div>
</div>