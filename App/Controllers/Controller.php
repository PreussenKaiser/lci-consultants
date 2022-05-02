<?php

namespace App\Controllers;

use App\Views\View;

/**
 * The base controller.
 * 
 * @author PreussenKaiser
 */
abstract class Controller
{
    /**
	 * @var View The view for the controller.
	 */
    protected View $view;

	/**
	 * Initializes a new instance of the Controller class.
	 */
	protected function __construct()
    {
		$this->view = new View;
	}

	/**
	 * Calls a child controller's method.
	 *
	 * Called when a child method is accessed outside it's context.
	 *
	 * @param string $name The name of the method.
	 * @param array $args The arguments for the method.
	 */
	public final function __call(string $name, array $args): void
	{
		$method = $name . 'Action';

		if (method_exists($this, $method)) {
			call_user_func_array([$this, $method], ...$args);
		}
	}
}