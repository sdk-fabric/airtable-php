<?php
/**
 * CommentCollection automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Airtable;

use PSX\Schema\Attribute\Description;

#[Description('')]
class CommentCollection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $offset = null;
    /**
     * @var array<Comment>|null
     */
    #[Description('')]
    protected ?array $records = null;
    public function setOffset(?string $offset): void
    {
        $this->offset = $offset;
    }
    public function getOffset(): ?string
    {
        return $this->offset;
    }
    /**
     * @param array<Comment>|null $records
     */
    public function setRecords(?array $records): void
    {
        $this->records = $records;
    }
    /**
     * @return array<Comment>|null
     */
    public function getRecords(): ?array
    {
        return $this->records;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('offset', $this->offset);
        $record->put('records', $this->records);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
