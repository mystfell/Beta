<?php

namespace Myst\Interfaces\Abstracts;

interface IErrorsRepository {

	/**
	 * Determine whether the user can create.
	 *
	 * @param $attributes array
	 * @return boolean
	*/
	public function can(array $attributes);

	/**
	 * Generate an instance of the MessageBag for errors.
	 *
	 * @param $items array
	 * @return array
	 */
	public function errors(array $items = array());

}