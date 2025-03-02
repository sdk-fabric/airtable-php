<?php
/**
 * Table automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Airtable;

use PSX\Schema\Attribute\Description;

#[Description('')]
class Table implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $id = null;
    #[Description('')]
    protected ?string $primaryFieldId = null;
    #[Description('')]
    protected ?string $name = null;
    #[Description('')]
    protected ?string $description = null;
    /**
     * @var array<Field>|null
     */
    #[Description('')]
    protected ?array $fields = null;
    public function setId(?string $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?string
    {
        return $this->id;
    }
    public function setPrimaryFieldId(?string $primaryFieldId): void
    {
        $this->primaryFieldId = $primaryFieldId;
    }
    public function getPrimaryFieldId(): ?string
    {
        return $this->primaryFieldId;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * @param array<Field>|null $fields
     */
    public function setFields(?array $fields): void
    {
        $this->fields = $fields;
    }
    /**
     * @return array<Field>|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('primaryFieldId', $this->primaryFieldId);
        $record->put('name', $this->name);
        $record->put('description', $this->description);
        $record->put('fields', $this->fields);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
