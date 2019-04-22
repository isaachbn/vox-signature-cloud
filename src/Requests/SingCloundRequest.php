<?php

namespace Vox\VoxSignatureCloud\Requests;

use Vox\VoxSignatureCloud\Client;

/**
 * Class SingCloundRequest
 * @package Vox\VoxSignatureCloud\Requests
 */
class SingCloundRequest extends AbstractRequest
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

        $response = $this->sendPost(
            $this->client->getUrl()."/api/signature",
            $parameters
        );

        return $response;
    }
}