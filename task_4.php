<?php
// Task 4: Multidimensional Array

function calculateAndPrintAverages($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $average = array_sum($grades) / count($grades);

        echo "Student $student's Average Grade: $average\n";
    }
}

$studentGrades = [
    'Student1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Student3' => ['Math' => 75, 'English' => 86, 'Science' => 79],
];

calculateAndPrintAverages($studentGrades);