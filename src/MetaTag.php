<?php
/**
 * MetaTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Airtable;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class MetaTag extends TagAbstract
{
    /**
     * Retrieve the user's ID. For OAuth access tokens, the scopes associated with the token used are also returned.
     *
     * @return User
     * @throws ErrorException
     * @throws ClientException
     */
    public function getWhoami(): User
    {
        $url = $this->parser->url('/v0/meta/whoami', [
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(User::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Error::class));

                throw new ErrorException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }



}
