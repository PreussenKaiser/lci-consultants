<?php

namespace App\Services\Image;

/**
 * The interface that implements image queries.
 * 
 * @author PreussenKaiser
 */
interface ImageServiceInterface
{
    /**
     * Retrieves images from the service.
     * 
     * @param string $dir The directory where the images are stored.
     * @param iterable Images in that directory.
     */
    public function getImages(string $dir): iterable;
}