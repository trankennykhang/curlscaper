<?php
namespace scraper\libs;
use scraper\browsers\driver\curl\CurlBrowser;
use scraper\browsers\IVirtualBrowser;

final class CurlBrowserHelper
{
    public static function chromeAgentString(): string
    {
        return "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36";
    }
    public static function newCurlBrowser(string $agent = ""): IVirtualBrowser {
        return new CurlBrowser($agent);
    }
}