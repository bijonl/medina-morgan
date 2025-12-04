<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 
$phone_number_table_header = get_field('phone_number_table_header');
$phone_number_label_table_header = get_field('phone_number_label_table_header');

if (have_rows('phone_numbers', 'options')) { ?>
    <section <?php echo pw_block_section_classes($block); ?>>

        <?php if ($has_title_area) {
            include(locate_template('blocks/partials/title-area.php'));
        }; ?>

        <div class="cta-directory-container container">
            <div class="row">
                <div class="cta-directory-col col-12 text-center">

                    <table class="table table-bordered w-100" role="table">
                        <caption class="sr-only">Directory of contact phone numbers</caption>

                        <thead>
                            <tr>
                                <th  scope="col"><?php echo $phone_number_label_table_header ? $phone_number_label_table_header : 'Label'?></th>
                                <th  scope="col"><?php echo $phone_number_table_header ? $phone_number_table_header : 'Phone' ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while (have_rows('phone_numbers', 'options')) {
                                the_row(); 
                                $phone_number_label = get_sub_field('phone_number_label');
                                $phone_number       = get_sub_field('phone_number');

                                // Clean number for tel link (remove spaces, parentheses, dashes)
                                $tel_link = preg_replace('/[^0-9+]/', '', $phone_number);
                            ?>
                                <tr>
                                    <td ><?php echo esc_html($phone_number_label); ?></td>
                                    <td >
                                        <a 
                                            class="color-inherit"
                                            href="tel:<?php echo esc_attr($tel_link); ?>" 
                                            aria-label="Call <?php echo esc_attr($phone_number_label); ?> at <?php echo esc_attr($phone_number); ?>"
                                        >
                                            <?php echo esc_html($phone_number); ?>
                                        </a>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>

    </section>
<?php }; ?>
