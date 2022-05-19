<?php

namespace Core\Logging;

/**
 * The interface which implements logging.
 * 
 * @author PreussenKaiser
 */
interface LoggerInterface
{
    /**
	 * Writes a debug message.
	 *
     * @param string $message The message to write.
     */
    public function debug(string $msg): void;

    /**
	 * Writes an info message.
	 *
     * @param string $message The message to write.
     */
    public function info(string $msg): void;

    /**
	 * Writes a warning message.
	 *
     * @param string $message The message to write.
     */
    public function warning(string $msg): void;

    /**
	 * Writes an error message.
	 *
     * @param string $message The message to write.
     */
    public function error(string $msg): void;
}