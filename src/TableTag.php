<?php
/**
 * TableTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Airtable;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class TableTag extends TagAbstract
{
    /**
     * Creates a new table and returns the schema for the newly created table.
     *
     * @param string $baseId
     * @param Table $payload
     * @return Table
     * @throws ClientException
     */
    public function create(string $baseId, Table $payload): Table
    {
        $url = $this->parser->url('/v0/meta/bases/:baseId/tables', [
            'baseId' => $baseId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Table::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $baseId
     * @param string $tableIdOrName
     * @param Table $payload
     * @return Table
     * @throws ClientException
     */
    public function update(string $baseId, string $tableIdOrName, Table $payload): Table
    {
        $url = $this->parser->url('/v0/meta/bases/:baseId/tables/:tableIdOrName', [
            'baseId' => $baseId,
            'tableIdOrName' => $tableIdOrName,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('PATCH', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Table::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}
