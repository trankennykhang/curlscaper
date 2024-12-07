<?php
namespace scraper\libs;
use scraper\browsers\helpers\PostData;

final class Curl
{
    private $handle = null;
    public function __construct(string $agent = "", bool $stdout=false)
    {
        $this->handle = curl_init();
        if ($agent != "")
            $this->setUserAgent($agent);

        if (!$stdout) $this->setOption(CURLOPT_RETURNTRANSFER, true);
    }
    public function setUrl(string $url): void
    {
        $this->setOption(CURLOPT_URL, $url);
    }
    public function setHeaders(array $headers): void
    {
        $this->setOption( CURLOPT_HTTPHEADER, $headers);
    }
    public function setEncoding(string $encode): void
    {
        $this->setOption(CURLOPT_ENCODING, $encode);
    }
    public function setUserAgent(string $agent): void
    {
        $this->setOption(CURLOPT_USERAGENT, $agent);
    }
    public function setPostData(PostData $postData): void
    {
        $this->setOption(CURLOPT_POSTFIELDS, http_build_query($postData));
    }
    public function toStdout(): void
    {
        $this->setOption(CURLOPT_RETURNTRANSFER, false);
    }
    public function execute(): string
    {
        curl_exec($this->handle);
        if (!$result = curl_exec($this->handle))
        {
            trigger_error(curl_error($ch));
        }
        return $result;
    }
    public function setOption($option, mixed $value): void
    {
        curl_setopt($this->handle, $option, $value);
    }
    public function close(): void
    {
        curl_close($this->handle);
    }

}