<?php

namespace Myst\Interfaces\Core;

interface IRequiredRepository {

	/**
	 * A list of all the required input fields.
	 *
	 * @return array
	 */
	public function required();

}