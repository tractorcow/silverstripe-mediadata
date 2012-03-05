<?php

/**
 * Provides extra file information functionality
 *
 * @author Damian Mooyman
 * @see File
 */
class MediaDataFileExtension extends DataObjectDecorator
{
    /**
     * Retrieves the extracted media information for this file
     * @return IMediaFileInformation The extracted media file information
     */
    public function getMediaData()
    {
        return MediaDataManager::factory()->DataFor($this->owner->FullPath);
    }
}