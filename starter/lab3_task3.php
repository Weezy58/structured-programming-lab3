<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 3: switch-case and match Expression [6 marks]
 *
 * @author     [wayne naum ]
 * @student    [ENE 212-0060/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [Date completed]
 */

// ==========================================
// EXERCISE A — Day of Week Classifier
// ==========================================
echo "<h3>Exercise A — Day of Week Classifier</h3>";

$day = 4; 

switch ($day) {
    case 1: echo "Monday — Lecture day<br>"; break;
    case 2: echo "Tuesday — Lecture day<br>"; break;
    case 3: echo "Wednesday — Lecture day<br>"; break;
    case 4: echo "Thursday — Lecture day<br>"; break;
    case 5: echo "Friday — Lecture day<br>"; break;
    case 6:
    case 7:
        echo "Weekend<br>";
        break;
    default:
        echo "Invalid day number. Please enter 1-7.<br>";
        break;
}

echo "<hr>";

// ==========================================
// EXERCISE B — HTTP Status Code Explainer
// ==========================================
echo "<h3>Exercise B</h3>";

$status_code = 404; 

switch ($status_code) {
    case 200: echo "200: OK — The request succeeded.<br>"; break;
    case 301: echo "301: Moved Permanently — The URL has been changed.<br>"; break;
    case 400: echo "400: Bad Request — The server could not understand the request.<br>"; break;
    case 401: echo "401: Unauthorized — Authentication is required.<br>"; break;
    case 403: echo "403: Forbidden — You do not have permission to access this.<br>"; break;
    case 404: echo "404: Not Found — The requested resource could not be found.<br>"; break;
    case 500: echo "500: Internal Server Error — The server encountered a problem.<br>"; break;
    default: echo "$status_code: Unknown Status Code.<br>"; break;
}

echo "<hr>";

// ==========================================
// EXERCISE C — PHP 8 match Rewrite
// ==========================================
echo "<h3>Exercise C</h3>";

$status_code_match = 404; 

// The match expression assigns the result directly to the variable
$explanation = match ($status_code_match) {
    200 => "200: OK — The request succeeded.<br>",
    301 => "301: Moved Permanently — The URL has been changed.<br>",
    400 => "400: Bad Request — The server could not understand the request.<br>",
    401 => "401: Unauthorized — Authentication is required.<br>",
    403 => "403: Forbidden — You do not have permission to access this.<br>",
    404 => "404: Not Found — The requested resource could not be found.<br>",
    500 => "500: Internal Server Error — The server encountered a problem.<br>",
    default => "$status_code_match: Unknown Status Code.<br>",
};

echo $explanation;

echo "<hr>";

// The single closing tag for the whole file!
?>
