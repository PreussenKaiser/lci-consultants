<?php

namespace Config;

use Routes\Dispatcher;

use Exception;

/**
 * The class that runs configuration.
 */
final class Bootstrap
{
    /**
     * @var Dispatcher What to dispatch requests with.
     */
    private Dispatcher $dispatcher;

    /**
     * Initializes a new instance of the Bootstrap class.
     */
    public function __construct() {
        $this->dispatcher = new Dispatcher;
    }

    /**
     * Initializes the application.
     */
    public function init(): void
    {
        session_start();
        App::loadConfig();

        try {
            $this->dispatcher->dispatch();
        }
        catch (Exception $ex) {
            header('Location: error@error');
        }
    }
}
