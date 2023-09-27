<?php

// Task 4: Multidimensional Array

function averageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $average = $total / count($grades);
        echo "$student's average grade: $average\n";
    }
}

$studentGrades = array(
    'Rahim' => array(
        'Math' => 85,
        'English' => 92,
        'Science' => 78
    ),
    'Karim' => array(
        'Math' => 88,
        'English' => 95,
        'Science' => 90
    ),
    'Rafiq' => array(
        'Math' => 76,
        'English' => 84,
        'Science' => 89
    )
);

averageGrades($studentGrades);