<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Grade to Point Mapping
    $gradeToPoint = [
        'A+' => 4.00, 'A' => 3.75, 'A-' => 3.50,
        'B+' => 3.25, 'B' => 3.00, 'B-' => 2.75,
        'C+' => 2.50, 'C' => 2.25, 'D' => 2.00,
        'F' => 0.00
    ];

    $grades = $_POST['grades'];
    $credits = $_POST['credits'];

    $totalPoints = 0;
    $totalCredits = 0;

    // Calculate total grade points and total credits
    foreach ($grades as $index => $grade) {
        $grade = strtoupper(trim($grade)); // Normalize input
        $credit = (float)$credits[$index];

        if (isset($gradeToPoint[$grade])) {
            $point = $gradeToPoint[$grade];
            $totalPoints += $point * $credit;
            $totalCredits += $credit;
        } else {
            echo "<p>Invalid grade entered: $grade. Please enter valid grades (A+, A, A-, etc.).</p>";
            exit;
        }
    }

    // Calculate CGPA
    if ($totalCredits > 0) {
        $cgpa = $totalPoints / $totalCredits;
        echo "<h2>Your CGPA is: " . number_format($cgpa, 2) . "</h2>";
        echo "<a href='cgpa.php'>Back to Home</a>";
    } else {
        echo "<p>Total credits cannot be zero. Please enter valid course data.</p>";
    }
} else {
    echo "<p>Invalid request method. Please submit the form properly.</p>";
}
