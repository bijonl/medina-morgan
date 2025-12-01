<?php $stat_title = $not_a_number ? $text : number_format($number); ?>

<div class="single-stat-wrapper">
    <div class="top-line-title-wrapper">
        <p class="mb-0 top-line"><?php echo esc_html($top_line); ?></p>
    </div>
    <div class="stat-title-wrapper">
        <h3 class="h2 mb-0 stat-title">
            <?php echo $unit ?><span class="<?php echo $not_a_number ? 'text' : 'number' ?>"><?php echo $stat_title; ?></span>
        </h3>
    </div>
    <div class="stat-content-wrapper">
        <p class="mb-0 stat-content"><?php echo wp_kses_post($content); ?></p>
    </div>
</div>