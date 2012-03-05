<?php

/**
 * Loader class for MediaData module
 * @author Damo
 */
class MediaDataManager
{
    /**
     * Flag to indicate whether this module should attempt to automatically load itself
     * @var boolean
     */
    public static $auto_load = true;
    
    public static $cache_class = 'MediaDataFactory';
    
    public static function load()
    {
        Object::add_extension('File', 'MediaDataFileExtension');
    }

    /**
     * Instance of cache to use
     * @var IMediaDataCache
     */
    private static $_instance = null;
    
    /**
     * Returns or constructs the data factory
     * @return IMediaDataFactory
     */
    public static function factory()
    {
        if (!self::$_instance)
            self::$_instance = new self::$cache_class();
        return self::$_instance;
    }
    
}