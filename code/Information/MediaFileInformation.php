<?php

/**
 * Summary of information found out about a media file
 * @author Damian Mooyman
 */
class MediaFileInformation extends MediaData implements IMediaFileInformation
{
    public function __construct($filename)
    {
        $data = $this->extractDataFromFilename($filename);
        parent::__construct($data);
    }

    protected function extractDataFromFilename($filename)
    {
        if (empty($filename))
            return null;
        $id3 = new getID3();
        $data = $id3->analyze($filename);
        getid3_lib::CopyTagsToComments($data);
        return $data;
    }
    
    public function exists()
    {
        $format = $this->getFormat();
        return !!$format;
    }
    
    public function getFileName()
    {
        return $this->getInfo('filename');
    }
    
    public function getFilePath()
    {
        return $this->getInfo('filenamepath');
    }

    public function getTitle()
    {
        return $this->getInfo('comments', 'title', 0);
    }

    public function getArtist()
    {
        return $this->getInfo('comments', 'artist', 0);
    }

    public function getAlbum()
    {
        return $this->getInfo('comments', 'album', 0);
    }

    public function getFormat()
    {
        return $this->getInfo('fileformat');
    }

    public function getDuration()
    {
        return $this->getInfo('playtime_seconds');
    }

    public function getDurationString()
    {
        return $this->getInfo('playtime_string');
    }

    public function getBitrate()
    {
        return $this->getInfo('bitrate');
    }

    public function getFileSize()
    {
        return $this->getInfo('filesize');
    }

    public function getMimeType()
    {
        return $this->getInfo('mime_type');
    }

    public function Picture()
    {
        // Extracting pictures from media files requires the MemoryImage module from
        // https://github.com/tractorcow/silverstripe-memoryimage
        if (!class_exists('MemoryImage'))
            return null;

        $imageData = $this->getInfo('comments', 'picture', 0, 'data');
        if (!$imageData)
            return null;

        $image = new MemoryImage();
        $image->Data = $imageData;
        return $image;
    }

    public function Audio()
    {
        $audio = new MediaAudioInformation($this->getInfo('audio'));
        return $audio->exists() ? $audio : null;
    }

    public function Video()
    {
        $video = new MediaVideoInformation($this->getInfo('video'));
        return $video->exists() ? $video : null;
    }
}