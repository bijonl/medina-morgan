<?php $stat_title = $not_a_number ? $text : number_format($number); ?>

<div class="single-stat-wrapper">
    <div class="top-line-title-wrapper">
        <p class="mb-0 top-line"><?php echo esc_html($top_line); ?></p>
    </div>

    <div class="stat-title-wrapper">
        <h3 class="h2 mb-0 stat-title">
            <?php if ( $not_a_number ) { ?>
                <span class="text"><?php echo $text; ?></span>
            <?php } else { ?>

                <?php 
                    // Determine end value
                    $end = (int) $number;

                    // Pick whatever start offset you prefer:
                    $start = max(0, $end - 20); // Example: 500 → 490, 50 → 40

                    // Animation time (optional per-stat customization)
                    $time = "1s";
                ?>
                
                <span 
                    class="counter number" 
                    style="--from:<?php echo $start; ?>; --to:<?php echo $end; ?>; --time:<?php echo $time; ?>;"
                ><?php echo $unit ?></span>

            <?php }; ?>
        </h3>
    </div>

    <div class="stat-content-wrapper">
        <p class="mb-0 stat-content"><?php echo wp_kses_post($content); ?></p>
    </div>
</div>
