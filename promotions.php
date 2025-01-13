<?php
header("Access-Control-Allow-Origin: *");

// Allow specific HTTP methods
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

// Allow specific headers
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// If this is a preflight request, terminate early
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Your actual PHP logic
header('Content-Type: application/json');


// Example promotion data
$promotions = [
    ["image" => "./assets/web-hosting.jpg", "text" => "Get 50% off on your first blog hosting!"],
    ["image" => "./assets/deals.jpg", "text" => "Exclusive deals on writing tools!"]
];

echo json_encode($promotions);
?>
