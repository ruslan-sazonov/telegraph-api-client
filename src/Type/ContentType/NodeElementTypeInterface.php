<?php declare(strict_types=1);

namespace SSitdikov\TelegraphAPI\Type\ContentType;

interface NodeElementTypeInterface extends \JsonSerializable
{
    public function setId(int $id);
    public function getId(): int;
    public function hasChildren(): bool;
    public function getChildren();
    public function addContentElement(AbstractNodeElementType $element);
    public function setText(string $value);
    public function jsonSerialize();
}
