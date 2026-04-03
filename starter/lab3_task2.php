<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 2: JKUAT Grade Classification System [8 marks]
 *
 * IMPORTANT: You must complete pseudocode AND flowchart in your PDF
 * report BEFORE writing any code below. Marks are awarded for all
 * three components: pseudocode, flowchart, and working code.
 *
 * @author     [wayne naum]
 * @student    [ENE212-0060/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [Date completed]
 */

echo "<h3>Task 2: Grade Classification System</h3>";

// ==========================================
// 1. INPUTS (Currently set to Test Set A)
// ==========================================
$cat1 = 0;
$cat2 = 0;
$cat3 = 0;
$cat4 = 0;
$exam = 15;

// ==========================================
// 2. SEQUENCE: Calculations
// ==========================================
$total = $cat1 + $cat2 + $cat3 + $cat4 + $exam;
$cats_attended = 0;

if ($cat1 > 0) { $cats_attended++; }
if ($cat2 > 0) { $cats_attended++; }
if ($cat3 > 0) { $cats_attended++; }
if ($cat4 > 0) { $cats_attended++; }

echo "<strong>Scores:</strong> CATs Attended: $cats_attended/4 | Exam: $exam | Total Score: $total/100<br><br>";

// ==========================================
// 3. SELECTION: Eligibility & Grading
// ==========================================
if ($cats_attended >= 3 && $exam >= 20) {
    
    // --- Grade Classification (if-elseif-else) ---
    if ($total >= 70) {
        $grade = "A";
        $desc = "Distinction";
    } elseif ($total >= 65) {
        $grade = "B+";
        $desc = "Credit Upper";
    } elseif ($total >= 60) {
        $grade = "B";
        $desc = "Credit Lower";
    } elseif ($total >= 55) {
        $grade = "C+";
        $desc = "Pass Upper";
    } elseif ($total >= 50) {
        $grade = "C";
        $desc = "Pass Lower";
    } elseif ($total >= 40) {
        $grade = "D";
        $desc = "Marginal Pass";
    } else {
        $grade = "E";
        $desc = "Fail";
    }

    echo "<strong>Status:</strong> Grade $grade ($desc)<br>";

    // --- Supplementary Check (Ternary Operator) ---
    $supp_status = ($grade === "D") ? "Eligible for Supplementary Exam" : "Not eligible for supplementary";
    echo "<strong>Supplementary:</strong> $supp_status<br>";

} else {
    // --- Disqualified Branch ---
    echo "<strong>Status:</strong> <span style='color:red;'>DISQUALIFIED — Exam conditions not met</span><br>";
}
?>
