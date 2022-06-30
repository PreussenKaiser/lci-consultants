<?php

namespace Core\Logging;

use DateTime;

/**
 * The logger which logs to a text file.
 * 
 * Debug: 0, Info: 1,
 * Warning: 2, Error: 3
 * 
 * @author PreussenKaiser
 */
final class Logger implements LoggerInterface
{
    /**
     * The current instance of the Logger.
     * @var ?Logger
     */
    private static ?Logger $instance = null;

    /**
     * The path to place logs in.
     * @var string
     */
    private string $path;

    /**
     * Initializes a new instance of the Logger singleton.
     */
    private function __construct()
    {
        $this->loadSettings();
    }

    /**
     * Gets the current logger instance.
     * 
     * @return Logger The current instance of the logger.
     */
    public static function getInstance(): Logger
    {
        if (is_null(self::$instance))
            self::$instance = new self;

        return self::$instance;
    }

    /**
	 * Writes a debug message to a text file.
	 *
     * @param string $message The message to write.
     */
    public function debug(string $msg): void
    {
        $this->writeLog($msg, 0);
    }

    /**
	 * Writes an info message to a text file.
	 *
     * @param string $message The message to write.
     */
    public function info(string $msg): void
    {
        $this->writeLog($msg, 1);
    }

    /**
	 * Writes a warning message to a text file.
	 *
     * @param string $message The message to write.
     */
    public function warning(string $msg): void
    {
        $this->writeLog($msg, 2);
    }

    /**
	 * Writes an error message to a text file.
	 *
     * @param string $message The message to write.
     */
    public function error(string $msg): void
    {
        $this->writeLog($msg, 3);
    }

    /**
     * Initializes the logger.
     * Settings are found in Config/config.ini
     */
    private function loadSettings(): void
    {
        $settings = parse_ini_file('../Config/config.ini');

        $this->path = ROOT . $settings['logging_filepath'];
    }

    /**
     * Writes a log as a text file.
     * 
     * @param string $msg The log to write.
     * @param int $level The severity of the log.
     */
    private function writeLog(string $msg, int $level): void
    {
        $date = new DateTime();
        $current = $date->format('Y-m-d H:i:s');
        $log = "($current) $level: $msg\n";

        $stream = fopen($this->path, 'a');

        fwrite($stream, $log);
        fclose($stream);
    }
}
