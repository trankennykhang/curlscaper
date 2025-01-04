<?php

namespace scraper\browsers;

use scraper\browsers\dom\NodeQueryBuilder;

interface IVirtualHtmlDom
{
    public function getNode(NodeQueryBuilder $builder);
}
