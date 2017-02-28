<?php

namespace Myst\Interfaces\Core;

interface ICreateRepository {

	/**
	 * Create a new version of the model.
	 *
	 * @param $attributes array
	 * @return boolean
	 */
	public function create(array $attributes);

}