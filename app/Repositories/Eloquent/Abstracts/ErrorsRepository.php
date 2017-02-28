<?php

namespace Myst\Repositories\Eloquent\Abstracts;

use Illuminate\Support\MessageBag;
use Myst\Interfaces\Abstracts\IErrorsRepository;

abstract class ErrorsRepository implements IErrorsRepository {
	
	/**
	 * Temporary Errors variable
	 */
	private $_errors;

	/**
	 * Determine whether the user can create.
	 *
	 * @param $attributes array
	 * @return boolean
	*/
	public function can(array $attributes) {
		// Have we already got the errors?
		if(is_null($this->_errors)) {
			// We haven't so get them
			$this->getErrors($attributes);
		}
		// Return true if count is 0
		return $this->errors()->count() == 0;
	}

	/**
	 * Generate an instance of the MessageBag for errors.
	 *
	 * @param $items array
	 * @return array
	 */
	public function errors(array $items = array()) {
		if(is_null($this->_errors)) {
			$this->_errors = new MessageBag();
		}

		if(!empty($items)) {
			foreach($items as $key => $value) {
				$this->_errors->add($key, $value);
			}
		}

		return $this->_errors;
	}

	/**
	 * Generate the messages for the repository.
	 *
	 * @param $slug string NULL
	 * @param $parameters array empty
	 * @param $domain string 'messages'
	 * @param $locale string NULL
	 * @return string
	 */
	protected function message($slug = NULL, $parameters = [], $domain = 'messages', $locale = null) {
		$path = 'repositories.'.\Request::route()->getName();
		$path = substr($path, 0, strrpos($path, '.'));
		$path = str_replace('.', '/', $path);
		return trans(
			$path.'.'.$slug,
			$parameters,
			$domain,
			$locale
		);
	}

	/**
	 * Get any associated errors.
	 *
	 * @param $attributes array
	 * @return array
	*/
	abstract protected function getErrors(array $attributes);

}