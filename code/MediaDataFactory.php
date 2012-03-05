<?php

/**
 * @author Damian Mooyman
 */
class MediaDataFactory implements IMediaDataFactory
{

    public static $cache_key = 'MediaDataFactoryCache';
    public static $enable_cache = true;

    public function __construct()
    {
        SS_Cache::set_cache_lifetime(self::$cache_key, 3600);
    }

    public function Clear()
    {
        $this->cache()->clean();
    }
    
    protected function cache()
    {
        return SS_Cache::factory(self::$cache_key);
    }

    public function DataFor($filename)
    {
        $fileKey = preg_replace('/[^A-Za-z0-9]+/', '_', $filename);
        
        if (isset($_GET['flush']))
            $this->Clear();
        elseif (self::$enable_cache)
        {
            // Build and check cache for existing record
            $result = $this->cache()->load($fileKey);
            if ($result)
                return unserialize($result);
        }

        // Generate and save new record in cache
        $result = new MediaFileInformation($filename);
        if (self::$enable_cache)
            $this->cache()->save(serialize($result), $fileKey);
        return $result;
    }

}