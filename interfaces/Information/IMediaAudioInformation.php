<?php

/**
 * Contains information on the audio channel of a media file
 * @author Damian mooyman
 */
interface IMediaAudioInformation extends IMediaChannelInformation
{
    /**
     * Retrieves the channel mode. E.g. 'stereo', 'mono', 'joint stereo'
     * @return string The channel modue as a user-readable string. 
     */
    public function getChannelMode();
    
    /**
     * Determines the number of channels
     * @return integer The number of audio channels 
     */
    public function getChannelCount();
    
    /**
     * Determines the sample rate for the audio stream in Hz
     * @return integer Number of audio samples per second
     */
    public function getSampleRate();
}