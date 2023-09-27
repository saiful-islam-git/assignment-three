<?php

// Task 2: Array Manipulation

function removeEvenNumbers(&$numbers) {
    foreach ($numbers as $key => $value) {
        if ($value % 2 == 0) {
            unset($numbers[$key]);
        }
    }
}
$numbers = range(1, 10);
removeEvenNumbers($numbers);
print_r($numbers);