<?php

/**
 * Container for media data in array format
 * @author Damian Mooyman
 */
abstract class MediaData extends ViewableData implements IMediaData
{
    protected $arrayData = null;
    
    public function __construct($arrayData = null)
    {
        parent::__construct();
        $this->arrayData = $arrayData;
    }
    
    /**
     * Retrieves nested array data information for any chain of keys about the current data set
     * @param $args Any list of a number of keys to traverse the data set tree
     * @return mixed Either the subtree of the main data set, or a single node value
     */
    public function getInfo()
    {
        $info = $this->arrayData;
        foreach (func_get_args() as $arg)
        {
            if (!isset($info[$arg]))
                return null;
            $info = $info[$arg];
        }
        return $info;
    }

    public function serialize()
    {
        return serialize($this->arrayData);
    }

    public function unserialize($serialized)
    {
        $this->arrayData = unserialize($serialized);
    }
}