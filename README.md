# Vox Signature Cloud

Lib para conexao com a API gateway-vox-signature.

## Examples

```php
$client = new Client();

$discoveryUserRequest =  new DiscoveryUserRequest($client);
$discoveryUserRequest->call('vault_id', ['document' => '11111111111']);


$singCloundRequest =  new SingCloundRequest($client);
$singCloundRequest->call('vault_id', ['document' => '11111111111']);

$scopeRequest = new ScopeRequest($client);
$scopeRequest->call();
```


