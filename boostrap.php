<?php

use Vox\VoxSignatureCloud\Client;
use Vox\VoxSignatureCloud\Requests\DiscoveryUserRequest;
use Vox\VoxSignatureCloud\Requests\ScopeRequest;
use Vox\VoxSignatureCloud\Requests\SingCloundRequest;

require  __DIR__.'/vendor/autoload.php';


$client = new Client(['url' => 'http://4dee4194.ngrok.io']);


$discoveryUserRequest =  new DiscoveryUserRequest($client);
//$response = $discoveryUserRequest->call('vault_id', ['document' => '01381669433']);
//var_dump($response);


$singCloundRequest =  new SingCloundRequest($client);
//$response = $singCloundRequest->call('vault_id', ['documen2t' => '01381669433']);
//var_dump($response);


$scopeRequest = new ScopeRequest($client);
$response = $scopeRequest->call();

var_dump($response);exit;
