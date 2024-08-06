<?php
/**
 * Comment automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Airtable;

use PSX\Schema\Attribute\Description;

#[Description('')]
class Comment implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $id = null;
    #[Description('')]
    protected ?string $createdTime = null;
    #[Description('')]
    protected ?string $lastUpdatedTime = null;
    #[Description('')]
    protected ?string $text = null;
    #[Description('')]
    protected ?string $parentCommentId = null;
    #[Description('')]
    protected ?string $reactions = null;
    #[Description('')]
    protected ?CommentAuthor $author = null;
    public function setId(?string $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?string
    {
        return $this->id;
    }
    public function setCreatedTime(?string $createdTime) : void
    {
        $this->createdTime = $createdTime;
    }
    public function getCreatedTime() : ?string
    {
        return $this->createdTime;
    }
    public function setLastUpdatedTime(?string $lastUpdatedTime) : void
    {
        $this->lastUpdatedTime = $lastUpdatedTime;
    }
    public function getLastUpdatedTime() : ?string
    {
        return $this->lastUpdatedTime;
    }
    public function setText(?string $text) : void
    {
        $this->text = $text;
    }
    public function getText() : ?string
    {
        return $this->text;
    }
    public function setParentCommentId(?string $parentCommentId) : void
    {
        $this->parentCommentId = $parentCommentId;
    }
    public function getParentCommentId() : ?string
    {
        return $this->parentCommentId;
    }
    public function setReactions(?string $reactions) : void
    {
        $this->reactions = $reactions;
    }
    public function getReactions() : ?string
    {
        return $this->reactions;
    }
    public function setAuthor(?CommentAuthor $author) : void
    {
        $this->author = $author;
    }
    public function getAuthor() : ?CommentAuthor
    {
        return $this->author;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('createdTime', $this->createdTime);
        $record->put('lastUpdatedTime', $this->lastUpdatedTime);
        $record->put('text', $this->text);
        $record->put('parentCommentId', $this->parentCommentId);
        $record->put('reactions', $this->reactions);
        $record->put('author', $this->author);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}