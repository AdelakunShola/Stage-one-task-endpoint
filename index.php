<?php
// Get query parameters from the GET request
$slackName = $_GET['slack_name'];
$track = $_GET['track'];

// Get current day of the week
$currentDay = date('l');

// Get current UTC time with validation of +/-2 minutes
$utcTime = gmdate('Y-m-d\TH:i:s\Z');

// GitHub URL of the file being run (link to your PHP script)
$githubFileURL = 'https://github.com/AdelakunShola/Stage-one-task-endpoint/index.php';

// GitHub Repo URL (link to the main repository page)
$githubSourceURL = 'https://github.com/AdelakunShola/Stage-one-task-endpoint';

// Prepare the response data in the specified JSON format
$responseData = array(
    "slack_name" => $slackName,
    "current_day" => $currentDay,
    "utc_time" => $utcTime,
    "track" => $track,
    "github_file_url" => $githubFileURL,
    "github_repo_url" => $githubSourceURL,
    "status_code" => 200
);

// Set the response content type to JSON
header('Content-Type: application/json');

// Return the response JSON with a status code of 200 (Success)
http_response_code(200);
echo json_encode($responseData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); // Use JSON_PRETTY_PRINT for formatting
?>
