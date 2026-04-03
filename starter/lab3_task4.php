<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 4: Nested Conditions — Loan Eligibility Checker [6 marks]
 *
 * IMPORTANT: You must complete pseudocode AND flowchart in your PDF
 * report BEFORE writing any code below.
 *
 * @author     [WAYNE NAUM]
 * @student    [ENE212-0085/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [Date completed]
 */
echo "<h3>Task 4: HELB Loan Eligibility Checker</h3>";

// ==========================================
// 1. INPUTS (Currently set to Test Set A)
// ==========================================
$enrolled = true;
$gpa = 2.0;
$annual_income = 50000;
$previous_loan = true;

// Format the display for our test output
$enrolled_text = $enrolled ? "Yes" : "No";
$prev_loan_text = $previous_loan ? "Yes" : "No";
echo "<strong>Data:</strong> Enrolled: $enrolled_text | GPA: $gpa | Income: KES " . number_format($annual_income) . " | Prev Loan: $prev_loan_text<br><br>";

// ==========================================
// 2. NESTED LOGIC
// ==========================================

// OUTER CHECK: Is the student enrolled?
if ($enrolled === false) {
    echo "<strong>Result:</strong> Not eligible — must be an active student<br>";
} else {

    // INNER CHECK 1: GPA Minimum
    if ($gpa < 2.0) {
        echo "<strong>Result:</strong> Not eligible — GPA below minimum<br>";
    } else {

        // INNER CHECK 2: Household Income
        $loan_amount = "";
        $is_eligible = true;

        if ($annual_income < 100000) {
            $loan_amount = "Full loan";
        } elseif ($annual_income < 250000) {
            $loan_amount = "Partial 75%";
        } elseif ($annual_income < 500000) {
            $loan_amount = "Partial 50%";
        } else {
            $loan_amount = "Not eligible — Income too high";
            $is_eligible = false; // Flag to skip the ternary step
        }

        // TERNARY: Renewal vs New Application
        if ($is_eligible) {
            // Only append the application type if they are actually getting a loan
            $app_type = ($previous_loan === true) ? "Renewal application" : "New application";
            echo "<strong>Result:</strong> $loan_amount | $app_type<br>";
        } else {
            // If income was too high, just print the denial reason
            echo "<strong>Result:</strong> $loan_amount<br>";
        }
    }
}

echo "<hr>";
?>
