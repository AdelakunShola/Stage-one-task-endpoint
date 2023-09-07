<?php
// Get query parameters from the GET request
$slackName = $_GET['slack_name'];
$track = $_GET['track'];

// Get current day of the week
$currentDay = date('l');

// Get current UTC time with validation of +/-2 hours
$utcTime = gmdate('Y-m-d H:i:s');

// GitHub URL of the file being run
$githubFileURL = 'https://github.com/AdelakunShola/Stage-one-task-endpoint/endpoint.php';

// GitHub URL of the full source code
$githubSourceURL = 'https://github.com/AdelakunShola/Stage-one-task-endpoint';

// Prepare the response data
$responseData = array(
    "Slack name" => $slackName,
    "Current day of the week" => $currentDay,
    "Current UTC time" => $utcTime,
    "Track" => $track,
    "GitHub URL of the file being run" => $githubFileURL,
    "GitHub URL of the full source code" => $githubSourceURL
);

// Set the response content type to JSON
header('Content-Type: application/json');

// Return the response JSON with a status code of 200 (Success)
http_response_code(200);
echo json_encode($responseData);