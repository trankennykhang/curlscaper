<?php

namespace scraper\browsers;

use scraper\browsers\helpers\QueryString;

interface IVirtualBrowser
{
    public function get(string $url, ?QueryString $queryString);
}