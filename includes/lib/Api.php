<?php

namespace TikTok;

class Api
{
    const API_BASE = "https://api.wppress.net/tiktok/";

    private $_config = [];

    private $defaults = [
        "license-key"        => "",
        "proxy-host"     => false,
        "proxy-port"     => false,
        "proxy-username" => false,
        "proxy-password" => false,
    ];
    protected $api = null;
    private $cacheEngine=null;

    public function __construct($config = [])
    {
        $this->_config = array_merge($this->defaults, $config);
        $this->cacheEngine=new Cache();
        $this->api = new \Sovit\TikTok\Api($this->_config,$this->cacheEngine);
    }
    private function params($params = [])
    {
        $params['key'] = $this->_config['license-key'];
        return http_build_query($params);
    }

    public function getChallenge($challenge = "")
    {
        return $this->api->getChallenge($challenge);
    }

    public function getChallengeFeed($challenge = "", $maxCursor = '0')
    {
        return $this->api->getChallengeFeed($challenge, $maxCursor);
    }

    public function getMusic($music_id = "")
    {
        return $this->api->getMusic($music_id);
    }

    public function getMusicFeed($music_id = "", $maxCursor = '0')
    {
        return $this->api->getMusicFeed($music_id, $maxCursor);
    }

    public function getUser($username = "")
    {
        return $this->api->getUser($username);
    }

    public function getUserFeed($username = "", $maxCursor = '0')
    {
        return $this->api->getUserFeed($username, $maxCursor);
    }

    public function getVideoByUrl($url = "")
    {
        return $this->api->getVideoByUrl($url);
    }
    function getNoWatermark($url,$vid=false){
        $noWatermark=$this->api->getNoWatermark($url);
        if(!$noWatermark){

            $fromServer=$this->remote_call(self::API_BASE."nwm/{$vid}");
            $video_id=$fromServer->id;
            $noWatermark=(object) [
                "id" => $video_id,
                "url"                 => \Sovit\TikTok\Helper::finalUrl("https://api-h2.tiktokv.com/aweme/v1/play/?video_id={$video_id}&vr_type=0&is_play_url=1&source=PackSourceEnum_FEED&media_type=4&ratio=default&improve_bitrate=1"),
            ];

        }
        return $noWatermark;
    }

    private function remote_call($_url = "", $params = [], $isJson = true)
    {
        $url = $_url . "?" . $this->params($params);
        $cache_key = normalize($url);
        if ($this->cacheEngine->get($cache_key)) {
            return $this->cacheEngine->get($cache_key);
        }
        $ch      = curl_init();
        $options = [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_USERAGENT      => USER_AGENT,
            CURLOPT_ENCODING       => "utf-8",
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_MAXREDIRS      => 10,
        ];
        curl_setopt_array($ch, $options);
        if (defined('CURLOPT_IPRESOLVE') && defined('CURL_IPRESOLVE_V4')) {
            curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        }
        if ($this->_config['proxy-host'] && $this->_config['proxy-port']) {
            curl_setopt($ch, CURLOPT_PROXY, $this->_config['proxy-host'] . ":" . $this->_config['proxy-port']);
            if ($this->_config['proxy-username'] && $this->_config['proxy-password']) {
                curl_setopt($ch, CURLOPT_PROXYUSERPWD, $this->_config['proxy-username'] . ":" . $this->_config['proxy-password']);
            }
        }
        $data = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($code < 400) {
            if ($isJson) {
                $data = @json_decode($data);
            }
            $this->cacheEngine->set($cache_key,$data);
            return $data;
        }
        return false;
    }
}
