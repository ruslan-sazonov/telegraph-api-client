<?php declare(strict_types=1);

namespace SSitdikov\TelegraphAPI\Type\ContentType;

class ParagraphType extends AbstractNodeElementType
{
    protected $tag = 'p';

    public function setText($text)
    {
        $this->children = [$text];
    }
}
