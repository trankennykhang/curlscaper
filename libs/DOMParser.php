<?php

namespace scraper\libs;

use scraper\browsers\IVirtualHtmlDom;
use scraper\browsers\dom\PhpDomDocument;

class DOMParser
{
    public static function fromPhpDOMDocument(string $html): IVirtualHtmlDom
    {
        return new PhpDomDocument($html);
    }
}
