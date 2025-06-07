<?php
require __DIR__ . '/vendor/autoload.php';

// Point to your service account key:
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/config/google/service-account.json');

$client = new \Google_Client();
$client->useApplicationDefaultCredentials();
$client->addScope(\Google_Service_Slides::PRESENTATIONS_READONLY);

try {
    $service = new \Google_Service_Slides($client);
    echo "Google Client instantiated successfully.\n";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
