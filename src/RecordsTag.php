<?php
/**
 * RecordsTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Airtable;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class RecordsTag extends TagAbstract
{
    /**
     * List records in a table. Note that table names and table ids can be used interchangeably. We recommend using table IDs so you don't need to modify your API request when your table name changes.
     *
     * @param string $baseId
     * @param string $tableIdOrName
     * @param string|null $timeZone
     * @param string|null $userLocale
     * @param int|null $pageSize
     * @param int|null $maxRecords
     * @param string|null $offset
     * @param string|null $view
     * @param string|null $sort
     * @param string|null $filterByFormula
     * @param string|null $cellFormat
     * @param string|null $fields
     * @param bool|null $returnFieldsByFieldId
     * @param string|null $recordMetadata
     * @return RecordCollection
     * @throws ClientException
     */
    public function getAll(string $baseId, string $tableIdOrName, ?string $timeZone = null, ?string $userLocale = null, ?int $pageSize = null, ?int $maxRecords = null, ?string $offset = null, ?string $view = null, ?string $sort = null, ?string $filterByFormula = null, ?string $cellFormat = null, ?string $fields = null, ?bool $returnFieldsByFieldId = null, ?string $recordMetadata = null): RecordCollection
    {
        $url = $this->parser->url('/v0/:baseId/:tableIdOrName', [
            'baseId' => $baseId,
            'tableIdOrName' => $tableIdOrName,
        ]);

        $options = [
            'query' => $this->parser->query([
                'timeZone' => $timeZone,
                'userLocale' => $userLocale,
                'pageSize' => $pageSize,
                'maxRecords' => $maxRecords,
                'offset' => $offset,
                'view' => $view,
                'sort' => $sort,
                'filterByFormula' => $filterByFormula,
                'cellFormat' => $cellFormat,
                'fields' => $fields,
                'returnFieldsByFieldId' => $returnFieldsByFieldId,
                'recordMetadata' => $recordMetadata,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, RecordCollection::class);
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
     * Retrieve a single record. Any "empty" fields (e.g. "", [], or false) in the record will not be returned.
     *
     * @param string $baseId
     * @param string $tableIdOrName
     * @param string $recordId
     * @return Record
     * @throws ClientException
     */
    public function get(string $baseId, string $tableIdOrName, string $recordId): Record
    {
        $url = $this->parser->url('/v0/:baseId/:tableIdOrName/:recordId', [
            'baseId' => $baseId,
            'tableIdOrName' => $tableIdOrName,
            'recordId' => $recordId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Record::class);
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
     * Updates a single record. Table names and table ids can be used interchangeably. We recommend using table IDs so you don't need to modify your API request when your table name changes.
     *
     * @param string $baseId
     * @param string $tableIdOrName
     * @param string $recordId
     * @param Record $payload
     * @return Record
     * @throws ClientException
     */
    public function replace(string $baseId, string $tableIdOrName, string $recordId, Record $payload): Record
    {
        $url = $this->parser->url('/v0/:baseId/:tableIdOrName/:recordId', [
            'baseId' => $baseId,
            'tableIdOrName' => $tableIdOrName,
            'recordId' => $recordId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('PUT', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Record::class);
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
     * Updates a single record. Table names and table ids can be used interchangeably. We recommend using table IDs so you don't need to modify your API request when your table name changes.
     *
     * @param string $baseId
     * @param string $tableIdOrName
     * @param string $recordId
     * @param Record $payload
     * @return Record
     * @throws ClientException
     */
    public function update(string $baseId, string $tableIdOrName, string $recordId, Record $payload): Record
    {
        $url = $this->parser->url('/v0/:baseId/:tableIdOrName/:recordId', [
            'baseId' => $baseId,
            'tableIdOrName' => $tableIdOrName,
            'recordId' => $recordId,
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

            return $this->parser->parse($data, Record::class);
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