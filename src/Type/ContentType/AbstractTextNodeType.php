<?php

namespace SSitdikov\TelegraphAPI\Type\ContentType;

class AbstractTextNodeType extends AbstractNodeElementType
{
    public function setText($text)
    {
        $this->children = [$text];
    }
}