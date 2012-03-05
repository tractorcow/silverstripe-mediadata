<?php

/**
 * Contains information on the video channel of a media file
 * @author Damian Mooyman
 */
interface IMediaVideoInformation extends IMediaChannelInformation
{ 
    /**
     * Determines frames per second!
     * @return double Number of frames per second
     */
    public function getFrameRate();
    
    /**
     * Determines the width of this stream in pixels
     * @return integer Width in pixels
     */
    public function getWidth();
    
    /**
     * Determines the height of this stream in pixels
     * @return integer Height in pixels
     */
    public function getHeight();
    
    /**
     * Determines the pixel aspect ratio for this strem
     * @return double Pixel aspect ratio, or width over height of each pixel
     */
    public function getPixelAspectRatio();
}