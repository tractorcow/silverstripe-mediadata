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
    public function MediaData()
    {
        return MediaDataManager::factory()->DataFor($this->owner->FullPath);
    }
    
    
	/**
	 * Shortcut for retrieving the width of this media for non-image elements
	 * @return integer|null Width of this media element, or null if not applicable
	 */
	function getWidth() {
		$media = $this->owner->MediaData();
        if($media && $video = $media->Video())
            return $video->getWidth();
	}
	
	/**
	 * Shortcut for retrieving the height of this media for non-height elements
	 * @return integer|null Height of this media element, or null if not applicable
	 */
	function getHeight() {
		$media = $this->owner->MediaData();
        if($media && $video = $media->Video())
            return $video->getHeight();
	}
}