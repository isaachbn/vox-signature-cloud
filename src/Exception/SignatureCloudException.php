<?php

namespace Vox\VoxSignatureCloud\Exception;

/**
 * Class SignatureCloudException
 * @package Vox\VoxSignatureCloud\Exception
 */
class SignatureCloudException extends \DomainException
{
    /**
     * @var array
     */
    private $detail;

    /**
     * SignatureCloudException constructor.
     * @param string $message
     * @param string $code
     * @param array $detail
     */
    public function __construct(string $message, string $code, array $detail = [])
    {
        $this->message = $message;
        $this->code = $code;
        $this->detail = $detail;
    }

    /**
     * @return array
     */
    public function getDetail()
    {
        return $this->detail;
    }
}
