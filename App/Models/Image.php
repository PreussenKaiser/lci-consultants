<?php

namespace App\Models;

/**
 * The model that represents a local image.
 * 
 * @author PreussenKaiser
 */
final class Image
{
    /**
     * Where the image is located.
     * @var string
     */
    private readonly string $path;

    /**
     * Initializes a new instance of the Image model.
     * 
     * @param string $path Where the image is located.
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * Gets the images path.
     * 
     * @return string The path relative to the page.
     */
    public function getPath(): string
    {
        return $this->parseRelativePath($this->path);
    }
    
    /**
     * Finds the relative path for the image.
     * 
     * @param string $path The image to get the path from.
     * @return string The path of the image in relation to the page.
     */
    private function parseRelativePath(string $path): string
    {
        $path = explode('/', $this->path);
        $index = array_search('Public', $path);

        return implode('/', array_slice($path, $index));
    }
}
