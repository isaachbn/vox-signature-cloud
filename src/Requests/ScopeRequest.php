<?php

namespace Vox\VoxSignatureCloud\Requests;

use Vox\VoxSignatureCloud\Client;

class ScopeRequest extends AbstractRequest
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

    public function call()
    {
        $response = $this->sendGet(
            $this->client->getUrl()."/api/scope"
        );

        return (array) $response;
    }
}