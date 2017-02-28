<?php

namespace Myst\Interfaces\Core;

interface ISaveRepository {

	/**
	 * Save changes to the application.
	 *
	 * @param $attributes array
	 */
	public function save(array $attributes);
	
}