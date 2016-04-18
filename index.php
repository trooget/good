<?php
require_once('results.php');

$dice_type = isset($_GET['d']) ? $_GET['d'] : 6;

$count = isset($_GET['count']) ? $_GET['count'] : 1;

$min = isset($_GET['min']) ? $_GET['min'] : 3;

//echo get_dice_results($dice_type, $count);
for ($i = 0; $i < $count; $i++) {
    //echo get_single_dice_result($dice_type) . "<br/>";
    echo get_dice_min_results($min, $dice_type) . "<br/>";
}