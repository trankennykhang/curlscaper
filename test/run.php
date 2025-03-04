<?php

require "vendor/autoload.php";

use scraper\browsers\dom\NodeQueryBuilder;
use scraper\libs\CurlBrowserHelper;
use scraper\browsers\helpers\QueryString;
use scraper\libs\DOMParser;

$agent = CurlBrowserHelper::chromeAgentString();
$browser = CurlBrowserHelper::newCurlBrowser($agent);
$qs = new QueryString();

$url = "https://www.activ8me.net.au/internet/nbn-fibre-fttp-hfc/";
//$url = "http://wp.kupman.local/testtest";

$rs = $browser->get($url, $qs);
if ($rs) {
    // PhpDomDocument @dom
    $dom = DOMParser::fromPhpDomDocument($rs);
    $builder = new NodeQueryBuilder();
    $builder->setTag('form');
    $form = $dom->getNode($builder);
    print_r($form->saveHTML());
}
