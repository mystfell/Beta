<?php

namespace Myst\Interfaces\Core;

interface IEditRepository {

	/**
	 * Edit a version of a model.
	 *
	 * @param $id integer
	 * @param $attributes array
	 * @return boolean
	 */
	public function edit($id, array $attributes);

}