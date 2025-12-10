<?php $hero_alignment = 'text-start'; ?>

<section class="single-staff-hero-area" style="background-image: url('<?php echo $staff_banner_image['url'] ?>')">
    <div class="homepage-hero-container d-none d-md-block staff-hero container h-100">
        <div class="homepage-hero-row staff-hero row justify-content-end align-items-center h-100">
            <div class="homepage-hero-col staff-hero col-md-7 col-lg-7 col-xl-6">
                <div class="staff-hero-content-wrapper background-primary staff-hero-content <?php echo $hero_alignment ?>">
                    <div class="name-wrapper">
                        <h1 class="h2"><?php echo $full_name ?></h1>
                    </div>
                    <div class="position-wrapper">
                        <h3><?php echo $position_display_name ?></h3>
                    </div>
                    <div class="contact-wrapper justify-content-between align-items-center">
                        <div class="contact-info-wrapper">
                            <p class="mb-0 phone">
                                <a 
                                class="color-inherit"
                                href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone_number); ?>"
                                aria-label="Call us at <?php echo $phone_number; ?>">
                                    <?php echo $phone_number; ?>
                                </a>
                            </p>
                            <p class="mb-0 email">
                                <a class="color-inherit"
                                href="mailto:<?php echo $email_address; ?>"
                                aria-label="Email us at <?php echo $email_address; ?>">
                                    <?php echo $email_address; ?>
                                </a>
                            </p>
                        </div>
                        <div class="button-email-wrapper mt-3">
                            <a class="pw-solid-button text-center">Email <?php echo $first_name ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="single-staff-hero-area d-md-none">
    <div class="homepage-hero-container d-block d-md-none staff-hero container h-100">
        <div class="homepage-hero-row staff-hero row justify-content-end align-items-center h-100">
            <div class="homepage-hero-col staff-hero col-md-7 col-lg-7 col-xl-6">
                <div class="staff-hero-content-wrapper background-primary staff-hero-content <?php echo $hero_alignment ?>">
                    <div class="name-wrapper">
                        <h1 class="h2"><?php echo $full_name ?></h1>
                    </div>
                    <div class="position-wrapper">
                        <h3><?php echo $position_display_name ?></h3>
                    </div>
                    <div class="contact-wrapper justify-content-between align-items-center">
                        <div class="contact-info-wrapper">
                            <p class="mb-0 phone">
                                <a 
                                class="color-inherit"
                                href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone_number); ?>"
                                aria-label="Call us at <?php echo $phone_number; ?>">
                                    <?php echo $phone_number; ?>
                                </a>
                            </p>
                            <p class="mb-0 email">
                                <a class="color-inherit"
                                href="mailto:<?php echo $email_address; ?>"
                                aria-label="Email us at <?php echo $email_address; ?>">
                                    <?php echo $email_address; ?>
                                </a>
                            </p>
                        </div>
                        <div class="button-email-wrapper mt-3">
                            <a class="pw-solid-button text-center">Email <?php echo $first_name ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section