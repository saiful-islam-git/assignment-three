<?php

// Task 3: Array Sorting

function sortGradesDescending(&$grades) {
    rsort($grades);
}

$grades = array(85, 92, 78, 88, 95);
sortGradesDescending($grades);
print_r($grades);