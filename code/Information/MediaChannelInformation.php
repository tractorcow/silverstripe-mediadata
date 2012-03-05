<?php

/**
 * Defines the fields for a video or audio channel
 * @author Damian Mooyman
 */
abstract class MediaChannelInformation extends MediaData implements IMediaChannelInformation
{
    public function exists()
    {
        $format = $this->getFormat();
        return !!$format;
    }
    
    public function getBitrate()
    {
        return $this->getInfo('bitrate');
    }

    public function getBitrateMode()
    {
        return $this->getInfo('bitrate_mode');
    }
    
    public function getBitsPerSample()
    {
        return $this->getInfo('bits_per_sample');
    }

    public function getCodec()
    {
        return $this->getInfo('codec');
    }

    public function getCompressionRatio()
    {
        return $this->getInfo('compression_ratio');
    }
    
    public function getFormat()
    {
        return $this->getInfo('dataformat');
    }

    public function getEncoder()
    {
        return $this->getInfo('encoder');
    }

    public function getIsLossless()
    {
        return !!$this->getInfo('lossless');
    }
}