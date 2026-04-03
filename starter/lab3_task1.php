<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 1: Simple if and if-else — Warm-Up Exercises [5 marks]
 *
 * @author     [wayne naum ]
 * @student    [ENE 212-0085/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [Date completed]
 */

// ==========================================
// EXERCISE A — Temperature Alert System
// ==========================================
echo "<h3>Exercise A</h3>";

// 1. Declare the variable (Starting with the first test value)
$temperature = 34.5; 

// 2. Check if Normal (between 36.1 and 37.5 inclusive)
if ($temperature >= 36.1 && $temperature <= 37.5) {
    echo "Normal<br>";
}

// 3. Check if Fever (greater than 37.5)
if ($temperature > 37.5) {
    echo "Fever<br>";
}

// 4. Check for Hypothermia (less than 36.1)
if ($temperature < 36.1) {
    echo "Hypothermia Warning<br>";
}

echo "<hr>"; 
// ==========================================
// EXERCISE B — Even or Odd
// ==========================================
echo "<h3>Exercise B</h3>";

// 1. Declare the variable
$number = 47;

// 2. Check if Even or Odd using an if-else statement
if ($number % 2 == 0) {
    echo "$number is EVEN<br>";
} else {
    echo "$number is ODD<br>";
}

// 3. Divisibility checks (using separate if statements)
if ($number % 3 == 0) {
    echo "$number is divisible by 3<br>";
}
if ($number % 5 == 0) {
    echo "$number is divisible by 5<br>";
}
if ($number % 3 == 0 && $number % 5 == 0) {
    echo "$number is divisible by both 3 and 5<br>";
}

echo "<hr>"; 
// ==========================================
// EXERCISE C — Comparison Chain
// ==========================================
echo "<h3>Exercise C</h3>";

$x = 10; 
$y = "10"; 
$z = 10.0;

var_dump($x == $y);  echo "<br>";  // A
var_dump($x === $y); echo "<br>";  // B
var_dump($x == $z);  echo "<br>";  // C
var_dump($x === $z); echo "<br>";  // D
var_dump($y === $z); echo "<br>";  // E
var_dump($x <=> $y); echo "<br>";  // F

echo "<hr>";
// ==========================================
// EXERCISE D — Null & Default Values
// ==========================================
echo "<h3>Exercise D</h3>";

$username = null;
$display = $username ?? "Guest";
echo "Welcome, $display<br>";

$config_val = null;
$env_val = null;
$default = "system_default";
$result = $config_val ?? $env_val ?? $default;
echo "Config: $result<br>";

// Custom Chained Example 
echo "<br><b>Custom Example:</b><br>";
$user_theme_preference = null;
$system_dark_mode = null;
$fallback_theme = "light_mode";

// It checks preference first, then system, then falls back to default
$active_theme = $user_theme_preference ?? $system_dark_mode ?? $fallback_theme;
echo "Active Theme: $active_theme<br>";
