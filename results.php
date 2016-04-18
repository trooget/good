<?php
function get_dice_results($dice_type, $count) {
    for ($i = 0; $i < $count; $i++) {
        echo "<p> dice " . ($i+1) . " result is "  . rand(1, $dice_type) . "</p><br/>";
    }
}

function get_dice_min_results($min, $dice_type) {
    $flag=rand(1, $dice_type);
    if ($flag >= $min) {
        echo $flag;
    }

}

function get_single_dice_result($dice_type) {
    return rand(1, $dice_type);
}