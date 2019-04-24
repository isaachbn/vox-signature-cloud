# Vox Signature Cloud

Lib para conexao com a API gateway-vox-signature.

## Getting Started
composer require railson/vox-signature-cloud


### Dependencies

| Name | Version|
| --- | --- |
| php | \>= 7.1 |
| guzzlehttp/guzzle | ^6.3 |

## Examples

```php
$client = new Client();

$discoveryUserRequest =  new DiscoveryUserRequest($client);
$discoveryUserRequest->call('vault', ['document' => '57641729851']);

$singCloundRequest =  new SingCloundRequest($client);
$singCloundRequest->call('vault_id', []);

$scopeRequest = new ScopeRequest($client);
$scopeRequest->call();
```


