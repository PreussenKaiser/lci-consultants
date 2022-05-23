<?php

namespace App\Services\Provided;

use App\Models\Provided;

/**
 * The interface that implements provided service queries.
 * 
 * @author PreussenKaiser
 */
interface ProvidedServiceInterface
{
    /**
     * Gets a service by it's name.
     * 
     * @param string $name The service to get.
     * @return Provided The found provided service.
     */
    public function getService(string $name): Provided;
}