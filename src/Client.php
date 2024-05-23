<?php
/**
 * Client automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Airtable;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\ClientAbstract;
use Sdkgen\Client\Credentials;
use Sdkgen\Client\CredentialsInterface;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TokenStoreInterface;

class Client extends ClientAbstract
{
    public function meta(): MetaTag
    {
        return new MetaTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function records(): RecordsTag
    {
        return new RecordsTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function fields(): FieldsTag
    {
        return new FieldsTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function table(): TableTag
    {
        return new TableTag(
            $this->httpClient,
            $this->parser
        );
    }



    public static function build(string $token): self
    {
        return new self('https://api.airtable.com/', new Credentials\HttpBearer($token));
    }
}
