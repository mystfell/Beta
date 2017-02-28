<?php

namespace Myst\Entities\Traits\Core;

trait GenerateString {

	/**
	 * Generate a random string using set characters.
	 *
	 * @param $length integer 10
	 * @param $characters string
	 * @return string
	 */
	public function generateString($length = 10, $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
		// Set randomString variable to empty
		$randomString = '';
		// Loop through length
		for($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		// Return
		return $randomString;
	}
	
}