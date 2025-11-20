<?php $filtered_practice_areas = isset($_GET['practice_areas']) 
    ? array_map('intval', (array) $_GET['practice_areas']) 
    : array();

$has_filters = !empty($filtered_practice_areas); ?>