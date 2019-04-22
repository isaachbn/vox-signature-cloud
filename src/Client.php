<?php

namespace Vox\VoxSignatureCloud;

class Client
{
    private $url;

    /**
     * Client constructor.
     * @param string $uri
     */
    public function __construct(string $uri = 'localhost:8080')
    {
        $this->url = $uri;
    }

    /**
     * @return mixed|string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
