<?php

require 'vendor/autoload.php';
require '../lib/Api/PDP/AuthorizationAPIApi.php';
require '../lib/Model/PDP/Query.php';
require '../lib/Model/PDP/HTTPValidationError.php';
require '../lib/ObjectSerializer.php';
require '../lib/Model/PDP/AuthorizationResult.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use React\Http\Server;
use Psr\Http\Message\ServerRequestInterface;
use React\EventLoop\Factory;
use React\Socket\SocketServer;
use OpenAPI\Client\Api\PDP\AuthorizationAPIApi;
use OpenAPI\Client\Model\PDP\AuthorizationResult;


$permitToken = 'permit_key_wapNkneuIdVEBZieehM8CtcRE4NynqAZhjOoZle3glqTMY1dnfXT9LN8EKmuYZdaWpp8hFLurIwRjB09tyHcUy';
$pdpUrl = 'https://cloudpdp.api.permit.io';
$apiUrl = 'https://api.permit.io';
$port = 4000;

$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken($permitToken)->setHost($apiUrl);

// Get the scope of the API key
$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    new GuzzleHttp\Client(),
    $config
);
try {
    $scope = $apiInstance->getApiKeyScope();
    print_r($scope);
} catch (Exception $e) {
    echo 'Exception when calling APIKeys';
}

$usersInstance = new OpenAPI\Client\Api\UsersApi(
    new GuzzleHttp\Client(),
    $config
);

// Create user with the given data
$user_create = new \OpenAPI\Client\Model\UserCreate([
    'key' => 'raz-cohen',
    'email' => 'raz@permit.io',
    'first_name' => 'Raz',
    'last_name' => 'Cohen',
]);
try {
    $result = $usersInstance->createUser($scope->getProjectId(), $scope->getEnvironmentId(), $user_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}


// Permit check function
$pdpConfig = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken($permitToken)->setHost($pdpUrl);
$pdpInstance = new AuthorizationAPIApi(
    new GuzzleHttp\Client(),
    $pdpConfig
);
// Create a query object - this is the data we want to check
// in this case we're checking if the user 'raz-cohen' is allowed to read a document
$query = new \OpenAPI\Client\Model\PDP\Query([
    'user' => ['key' => 'raz-cohen'],
    'action' => 'read',
    'resource' => [
        'type' => 'document',
        'tenant' => 'default'
    ]
]);
try {
    $is_allowed = $pdpInstance->isAllowedAllowedPost(
        $query,
    );

    // We'll print the result to the console
    if ($is_allowed->getAllow()) {
        echo "Permitted\n";
    } else {
        echo "Not Permitted\n";
    }
} catch (Exception $e) {
    echo 'Exception when calling PDP\AuthorizationAPIApi->isAllowedAllowedPost: ', $e->getMessage(), PHP_EOL;
}
