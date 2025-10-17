<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

require_once __DIR__ . '/classes/ApiClient.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method !== 'GET') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Only GET method is allowed.'
    ]);
    exit;
}

try {
    $api = new ApiClient('https://catfact.ninja');
    $catFactResponse = $api->get('/fact');

    $catFact = isset($catFactResponse['fact'])
        ? $catFactResponse['fact']
        : 'No cat fact available at the moment.';

    $response = [
        'status' => 'success',
        'user' => [
            'email' => 'oseni246femi@gmail.com',
            'name' => 'Oseni Adewale Oluwafemi',
            'stack' => 'PHP/Laravel'
        ],
        'timestamp' => gmdate('Y-m-d\TH:i:s.v\Z'),
        'fact' => $catFact
    ];

    echo json_encode($response, JSON_PRETTY_PRINT);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'An error occurred: ' . $e->getMessage()
    ]);
}
