<?php

namespace TikTok;

use Phpfastcache\CacheManager;
use Phpfastcache\Config\ConfigurationOption;

class Cache
{
    private $manager = null;

    function __construct()
    {
        CacheManager::setDefaultConfig(new ConfigurationOption([
            "path"             => CACHE_DIR,
            "itemDetailedDate" => false,
        ]));  
        $this->manager = CacheManager::getInstance('files');
    }
    function get($key)
    {
        $cache = $this->manager->getItem($key);
        return $cache->isHit()?$cache->get():false;
    }
    function set($key, $data)
    {
        $cache = $this->manager->getItem($key);
        $cache->set($data)->expiresAfter(3600);
        $this->manager->save($cache);
        return $data;
    }
}
