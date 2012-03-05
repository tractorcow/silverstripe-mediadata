<?php

/**
 * Container for media data in array format
 * @author Damian Mooyman
 */
interface IMediaData extends Serializable
{
    /**
     * Determine if this information exists and is valid
     * @return boolean A flag indicating whether data exists and is valid
     */
    public function exists();
}
