<?php

namespace Config;

use Routes\Server;

/**
 * Contains configuration settings for the project.
 * Called in the Program class to bootstrap configuration.
 * 
 * @author PreussenKaiser
 */
final class Config
{
	/**
	 * Loads configurations.
	 *
	 * Structured like a singleton get method because
	 * this shouldn't be loaded more than once.
	 */
	public static function loadConfig(): void
	{
		self::loadSettings();
		self::determineRoot();
	}

	/**
	 * Loads framework settings.
	 *
	 * Settings must be located in config.ini
	 * in the same directory as this class.
	 */
	private static function loadSettings(): void
	{
		$settings = parse_ini_file('config.ini');

		/**
		 * Defines where the root of the project is.
		 */
		define('PROJECT_NAME', $settings['project_name']);

		/**
		 * Defines the application title.
		 */
		define('TITLE', $settings['site_title']);

		/**
		 * Defines what name the index page is.
		 */
		define('INDEX', $settings['index']);
	}

	/**
	 * Initializes root constant.
	 * 
	 * @uses Server To determine where the project root is.
	 */
	private static function determineRoot(): void
	{
		$path = Server::determinePath();

		/**
		 * Defines project root.
		 */
		define('ROOT',
			str_replace(
			    'Public' . $path . 'index.php',
				'',
				$_SERVER['SCRIPT_FILENAME']
			)
		);
	}
}