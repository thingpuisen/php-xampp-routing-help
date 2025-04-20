<?php
require "functions.php";

$request = $_GET['url'] ?? '/';
$request = rtrim($request, '/');
$routes = [
    "/" => "controllers/index.php",
    "/admin-login" => "controllers/admin-login.php",
    "/attendance" => "controllers/attendance.php",
    "/test-schedule" => "controllers/test-schedule.php",
    "/exam-schedule" => "controllers/exam-schedule.php",
    "/semester-result" => "controllers/semester-result.php",
    "/forgot-password" => "controllers/forgot-password.php",
    "/student-registration" => "controllers/student-registration.php",
    "/admin-login" => "controllers/admin-login.php",
];
if (array_key_exists($request, $routes)) {
    require __DIR__ . '/' . $routes[$request];
} else {
    http_response_code(404);
    echo "Page not found";
}