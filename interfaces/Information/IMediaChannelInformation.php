<?php

/**
 * Defines the fields for a video or audio channel
 * @author Damian Mooyman
 */
interface IMediaChannelInformation extends IMediaData
{

    /**
     * Determines the bitrate of this stream in bits per second
     * @return integer Bitrate in bits per second
     */
    public function getBitrate();
    
    /**
     * Determines if this is a variable or constant bit rate stream
     * @return string Either 'cbr' (Constant Bit Rate) or 'vbr' (Variable Bit Rate)
     */
    public function getBitrateMode();

    /**
     * Count of bits per sample
     * @return integer Bits per sample
     */
    public function getBitsPerSample();

    /**
     * Determines the codec of this channel
     * @return string Codec name
     */
    public function getCodec();
    
    /**
     * Determines the compression ratio of this channel
     * @return decimal Ratio of compressed byte size to uncompressed size
     */
    public function getCompressionRatio();
    
    /**
     * Determines the format of this channel
     * @return string Format of channel
     */
    public function getFormat();

    /**
     * Determines the encoder used to generate this channel, if available
     * @return string Name of encoder
     */
    public function getEncoder();

    /**
     * Determine if this is a lossless format
     * @return boolean Flag indicating whether this is a lossless format
     */
    public function getIsLossless();
}