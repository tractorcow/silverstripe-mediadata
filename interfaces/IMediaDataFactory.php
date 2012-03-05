<?php

/**
 * Mechanism for extracting media information from a filename
 * @author Damian Mooyman
 */
interface IMediaDataFactory
{
    /**
     * @return IMediaFileInformation 
     */
    public function DataFor($filename);
    
    /**
     * Cleans out any cached records
     */
    public function Clear();
}