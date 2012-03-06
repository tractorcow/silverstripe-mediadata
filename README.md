# Media Metadata module for Silverstripe

This module allows metadata to be extracted from audio and video media files.

This module works best with the memoryimage module from <https://github.com/tractorcow/silverstripe-memoryimage>. If
you have this installed then you can also extract, resize, and display embedded album art on pages.

## Credits and Authors

 * Damian Mooyman - <https://github.com/tractorcow/silverstripe-mediadata>

## Requirements

 * SilverStripe 2.4.5, may work on lower versions
 * PHP 5.2

## Installation Instructions

 * Extract all files into the 'mediadata' folder under your Silverstripe root.
 * To extract extra metadata from a File object you can use the MediaData property to access it.

## API

Full PHPDoc documentation is included for all classes, so please check the code if you'd like more information.

The MediaData property of the File class contains these properties:

 * FileName
 * FilePath
 * Title
 * Artist
 * Album
 * Format
 * Duration
 * DurationString
 * Bitrate
 * FileSize
 * MimeType

The following functions return additional data:

 * Picture() will extract an Image object if there is an embedded album art
 * Audio() will extract further audio specific details
 * Video() will extract further video specific details

Audio() will return an object with the following properties (if there is audio information):

 * ChannelMode
 * ChannelCount
 * SampleRate

Video() will return an object with the following properties (if there is video/picture information):
 
 * FrameRate
 * Width
 * Height
 * PixelAspectRatio

Both the Audio() and Video() objects have these shared properties:

 * Bitrate
 * BitrateMode
 * BitsPerSample
 * Codec
 * CompressionRatio
 * Format
 * Encoder
 * IsLossless


