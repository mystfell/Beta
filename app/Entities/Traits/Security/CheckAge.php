<?php

namespace Myst\Entities\Traits\Security;

trait CheckAge {

	/**
	 * Check the user's age is above a threshold.
	 *
	 * @param $birthday date
	 * @param $age integer 13
	 * @return boolean
	 */
	public function checkAge($birthday, $age = 13) {
		// Convert birthday to correct format if needed
		if (time() < strtotime('+'.$age.' years', strtotime($birthday))) {
			return false;
		}
		return true;
	}
	
}