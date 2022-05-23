<?php

namespace App\Models;

/**
 * The model that represents a provided service.
 * 
 * @author PreussenKaiser
 */
final class Provided
{
    /**
     * The title of the service.
     * @var string
     */
    private readonly string $title;

    /**
     * Details about the service.
     * @var string
     */
    private readonly string $details;

    /**
     * A description of the service.
     * @var string
     */
    private readonly string $description;

    /**
     * Images displaying the service.
     * @var iterable
     */
    private readonly iterable $images;

    /**
     * Initializes a new instance of the Provided model.
     * 
     * @param string $title
     * @param string $details
     * @param string $description
     * @param iterable $images
     */
    public function __construct(string $title, string $details,
                                string $description, iterable $images)
    {
        $this->title = $title;
        $this->details = $details;
        $this->description = $description;
        $this->images = $images;
    }

    /**
     * Gets the services title.
     * 
     * @return string The title of the service.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Gets the services details.
     * 
     * @param string The details about the service.
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * Gets the services description.
     * 
     * @param string The details about the service.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Gets the services images.
     * 
     * @param iterable Images that display the service.
     */
    public function getImages(): iterable
    {
        return $this->images;
    }
}
