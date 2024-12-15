<?php

namespace scraper\browsers\drivers\curl;

use scraper\browsers\helpers\PostData;
use scraper\browsers\helpers\QueryString;
use scraper\browsers\IVirtualBrowser;
use scraper\libs\Curl;

class CurlBrowser implements IVirtualBrowser
{
    private $curl;
    public function __construct(string $agent)
    {
        $this->curl = new Curl($agent);
    }

    public function get(string $url, ?QueryString $queryString): string
    {
        // TODO: Implement get() method.
        $this->curl->setUrl($url);
        $result = $this->curl->execute();
        return $result;
    }
    public function post(string $url, ?PostData $postData): string
    {
        $defaults = [
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_FRESH_CONNECT => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FORBID_REUSE => 1,
            CURLOPT_TIMEOUT => 4
        ];
        foreach ($defaults as $k => $v) {
            $this->curl->setOption($k, $v);
        }
        $this->curl->setUrl($url);
        $this->curl->setPostData($postData);

        return $this->curl->execute();
    }
}
