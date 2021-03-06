<?php

require __DIR__.'/autoload.php';

use Lokat\LaravelLb\LogicBoxesTransaction;

use Carbon\Carbon;

// Setup user id and api key
$userId = getenv('LB_AUTH_USERID');
$apiKey = getenv('LB_API_KEY');
$reseller_id = getenv('RESELLER_ID');

$transaction = new LogicBoxesTransaction();

/** No need to set user id if you're using Laravel, it will automatically get the credential from config/logicboxes.php */
$transaction->setUserId($userId)->setApiKey($apiKey);

$response = $transaction->getResellerGreedyTransactions($reseller_id);
print_r($response);
