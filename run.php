<?php

require "vendor/autoload.php";
use scraper\libs\CurlBrowserHelper;
use scraper\browsers\helpers\QueryString;

$agent = CurlBrowserHelper::chromeAgentString();
$browser = CurlBrowserHelper::newCurlBrowser($agent);
$qs = new QueryString();

$rs = $browser->get("https://moodle.kenny.click", $qs);
