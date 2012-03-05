<?php

/**
 * Contains information on a media file
 * @author Damian Mooyman
 */
interface IMediaFileInformation extends IMediaData
{
    /**
     * Determines the file name
     * @return string File name excluding path
     */
    public function getFileName();
    
    /**
     * Determines the full file path
     * @return string File path 
     */
    public function getFilePath();
    
    /**
     * Determines the media title from the idv1/idv2 tags
     * @return string Media title 
     */
    public function getTitle();
    
    /**
     * Determines the artist name from the idv1/idv2 tags
     * @return string Artist name 
     */
    public function getArtist();
    
    /**
     * Determines the album name from the idv1/idv2 tags
     * @return string Album name 
     */
    public function getAlbum();
    
    /**
     * Determines the container format of the file
     * @return string Format type name (not extension)
     */
    public function getFormat();
    
    /**
     * Determines the duration of this file in seconds
     * @return double Duration in seconds 
     */
    public function getDuration();
    
    /**
     * Determines the duration of this file as a h:m:s formatted string. E.g. 1:12:20 
     * @return string Duration as a formatted string
     */
    public function getDurationString();
    
    /**
     * Determines the bitrate of this file
     * @return integer Bitrate of this file in bits per second
     */
    public function getBitrate();
    
    /**
     * Determine filesize in bytes
     * @return integer Filesize in bytes 
     */
    public function getFileSize();
    
    /**
     * Determines the mime type of the file
     * @return string Mime type 
     */
    public function getMimeType();
    
    /**
     * Attempts to extract the embedded thumbnail in the media file
     * @return Image The Image object containing the thumbnail 
     */
    public function Picture();
    
    /**
     * Retrieves information on the audio channel
     * @return IMediaAudioInformation The audio information object
     */
    public function Audio();
    
    /**
     * Retrieves information on the video channel
     * @return IMediaVideoInformation The video information object
     */
    public function Video();
}