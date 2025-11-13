<div class="single-accordion">
    <button class="accordion" data-accordion-id="<?php echo $accordion_id ?>">
        <h4 class="mb-0 h4"><?php echo $title ?></h4>
        <?php include(locate_template('blocks/accordions/partials/accordion-button.php'));  ?>       
    </button>
  <div class="accordion-content" id="<?php echo $accordion_id ?>" >
    <?php echo $content ?>
  </div>
</div>
