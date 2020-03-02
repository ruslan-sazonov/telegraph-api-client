<?php

namespace SSitdikov\TelegraphAPI\Type\ContentType;

class MainHeaderType extends AbstractNodeElementType
{
    protected $tag = 'h3';

    public function setText($text)
    {
        $this->children = [$text];
    }
}