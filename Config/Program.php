<?php

namespace Config;

use Core\Logging\LoggerInterface;
use Core\Logging\Logger;
use Routes\Dispatcher;

use Exception;

/**
 * The class that acts as the main entry-point for the application.
 * 
 * @author PreussenKaiser
 * @uses LoggerInterface For logging.
 */
final class Program
{
    /**
     * @var LoggerInterface Logs application processes.
     */
    private LoggerInterface $logger;

    /**
     * @var Dispatcher What to dispatch requests with.
     */
    private Dispatcher $dispatcher;

    /**
     * Initializes a new instance of the Program class.
     */
    public function __construct() {
        $this->logger = Logger::getInstance();
        $this->dispatcher = new Dispatcher;
    }

    /**
     * Initializes the application.
     */
    public function init(): void
    {
        session_start();
        Config::loadConfig();

        try {
            $this->dispatcher->dispatch();
        }
        catch (Exception $ex) {
            $this->logger->error($ex->getMessage());
            header('Location: error@error');
        }
    }
}
