<?php

require __DIR__.'/autoload.php';

use Lokat\LaravelLb\LogicBoxesDomain;

// Setup user id and api key
$userId = getenv('LB_AUTH_USERID');
$apiKey = getenv('LB_API_KEY');

// Setup reseller username and password
$orderId = '75860750';

$domain = new LogicBoxesDomain();

/** No need to set user id if you're using Laravel, it will automatically get the credential from config/logicboxes.php */
$domain->setUserId($userId)->setApiKey($apiKey);

$response = $domain->detailsByOrderId($orderId)->toArray();
print_r($response);
