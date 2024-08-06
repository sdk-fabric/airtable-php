<?php
/**
 * ErrorException automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Airtable;

use Sdkgen\Client\Exception\KnownStatusCodeException;

class ErrorException extends KnownStatusCodeException
{
    private Error $payload;

    public function __construct(Error $payload)
    {
        parent::__construct('The server returned an error');

        $this->payload = $payload;
    }

    /**
     * @return Error
     */
    public function getPayload(): Error
    {
        return $this->payload;
    }
}