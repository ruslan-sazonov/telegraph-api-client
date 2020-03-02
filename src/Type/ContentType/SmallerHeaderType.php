<?php

namespace SSitdikov\TelegraphAPI\Type\ContentType;

class SmallerHeaderType extends AbstractNodeElementType
{
    protected $tag = 'h4';

    public function setText($text)
    {
        $this->children = [$text];
    }
}