<?php declare(strict_types=1);

namespace SSitdikov\TelegraphAPI\Type\ContentType;

class LinkType extends AbstractNodeElementType
{
    protected $tag = 'a';

    public function setHref($href)
    {
        $this->attrs['href'] = $href;
    }
}
