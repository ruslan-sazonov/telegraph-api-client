<?php declare(strict_types=1);

namespace SSitdikov\TelegraphAPI\Type\ContentType;

class AbstractNodeElementType implements NodeElementTypeInterface
{
    protected $id;
    protected $tag;
    protected $attrs = [];
    protected $children = [];

    public function jsonSerialize()
    {
        $result = [
            'tag' => $this->tag,
        ];
        if (!empty($this->attrs)) {
            $result['attrs'] = $this->attrs;
        }
        if (!empty($this->children)) {
            $result['children'] = $this->children;
        }
        return $result;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function hasChildren(): bool
    {
        return (bool) count($this->children);
    }

    /**
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param AbstractNodeElementType $element
     */
    public function addContentElement(AbstractNodeElementType $element)
    {
        $this->children[] = $element;
    }

    /**
     * @param string $value
     */
    public function setText(string $value)
    {
        $this->children[] = $value;
    }
}
