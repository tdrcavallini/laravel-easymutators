<?php

namespace Request\EasyMutators\Upload;

use Intervention\Image\Image as InterventionImage;
use Symfony\Component\HttpFoundation\File\File;
use Request\EasyMutators\Mapping\FileMapping;
use Request\EasyMutators\Mapping\ImageMapping;

interface PathGenerator
{

    /**
     * @param File $file
     * @param FileMapping $mapping
     * @return FilePath
     */
    public function generatePathForFiles(File $file, FileMapping $mapping);

    /**
     * @param InterventionImage $image
     * @param ImageMapping $mapping
     * @return FilePath
     */
    public function generatePathForImages(InterventionImage $image, ImageMapping $mapping);

}