<?php

namespace App\Services\Image;

use App\Models\Image;

/**
 * The service that fetches images from a local directory.
 * 
 * @author PreussenKaiser
 */
final class ImageService implements ImageServiceInterface
{
    /**
     * Retrieves images from a local directory.
     * 
     * @param string $dir The directory where the images are stored.
     *                    The selected directory is located at Public/resources/img
     * @param iterable Images in that directory.
     */
    public function getImages(string $dir): iterable
    {
        $result = [];
        $dir = ROOT . "Public/resources/img/$dir/";

        $img_paths = glob("$dir*.jpg");

        foreach ($img_paths as $img_path) {
            array_push($result, new Image($img_path));
        }

        return $result;
    }
}
