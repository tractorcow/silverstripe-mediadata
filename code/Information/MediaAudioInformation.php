<?php

/**
 * @author Damian Mooyman
 */
class MediaAudioInformation extends MediaChannelInformation implements IMediaAudioInformation
{
    public function getChannelMode()
    {
        return $this->getInfo('channelmode');
    }
    
    public function getChannelCount()
    {
        return $this->getInfo('channels');
    }
    
    public function getSampleRate()
    {
        return $this->getInfo('sample_rate');
    }

}