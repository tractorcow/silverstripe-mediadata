<?php

/**
 * Defines the fields for a video stream
 * @author Damian Mooyman
 */
class MediaVideoInformation extends MediaChannelInformation implements IMediaVideoInformation
{
    public function getFrameRate()
    {
        return $this->getInfo('frame_rate');
    }
    
    public function getWidth()
    {
        return $this->getInfo('resolution_x');
    }
    
    public function getHeight()
    {
        return $this->getInfo('resolution_y');
    }
    
    public function getPixelAspectRatio()
    {
        $ratio = $this->getInfo('pixel_aspect_ratio');
        if(!$ratio)
            return 1.0; // Intelligent default
        return $ratio;
    }
}