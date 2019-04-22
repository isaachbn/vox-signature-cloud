<?php

namespace Vox\VoxSignatureCloud\Requests;

use Vox\VoxSignatureCloud\Client;

class DiscoveryUserRequest extends AbstractRequest
{
    /**
     * @var Client $client;
     */
    public $client;

    /**
     * DiscoveryUserRequest constructor.
     * @param Client $client
     */
    public function __construct(Client $client = null)
    {
        $this->client = $client ?? new Client();
    }

    /**
     * @param string $scope
     * @param array $parameters
     * @return mixed
     */
    public function call(string $scope, $parameters = [])
    {
        $parameters['scope'] = $scope;

        $response = $this->sendGet(
           $this->client->getUrl()."/api/certificate",
           $parameters
       );

        return $response;
    }
}
