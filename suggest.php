<?php
// Set response type to JSON
header("Content-Type: application/json");

// Read incoming JSON data
$data = json_decode(file_get_contents("php://input"), true);

// Extract user inputs safely
$websiteType = $data['website_type'] ?? '';
$industry = $data['industry'] ?? '';
$audience = $data['target_audience'] ?? '';

// Dummy AI logic for suggestion
if ($websiteType == "portfolio" && $industry == "tech") {
    $response = [
        "template" => "Modern Tech Portfolio",
        "layout" => "Single Page Scroll",
        "content" => "Welcome to my tech portfolio targeting recruiters."
    ];
} elseif ($websiteType == "business") {
    $response = [
        "template" => "Corporate Clean Design",
        "layout" => "Multi-Section Grid",
        "content" => "Boost your business with our digital solutions."
    ];
} else {
    $response = [
        "template" => "Simple Start Template",
        "layout" => "Two Column",
        "content" => "Welcome to your new website!"
    ];
}

// Return JSON response
echo json_encode($response);
?>
