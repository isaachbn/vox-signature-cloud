<?php

namespace Vox\VoxSignatureCloud;

class Client
{
    private $url;

    /**
     * Client constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->url =  $config['url'] ?? 'http://localhost/certificate?document=57641729851&scope=vault_id';
    }

    /**
     * @return mixed|string
     */
    public function getUrl()
    {
        return $this->url;
    }
}