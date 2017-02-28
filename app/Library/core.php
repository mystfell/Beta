<?php
/**
 * Use the current named route to access the text.
 *
 * @param $resource string NULL
 * @param $parameters array NULL
 * @return string
 */
function staticText($resource = NULL, array $parameters = []) {
	// No resource has been provided
	if($resource == NULL || !$resource) {
		return false;
	}

	// Get the current named route
	$route = Route::currentRouteName();
	
	// Replace the '.'s with '/'s and add '/' to end
	$route = str_replace('.', '/', $route);

	return trans($route. '.' . $resource, $parameters);
}

/**
 * Use the current named route to get the correct view
 *
 * @param $name string NULL
 * @return view
*/
function getView($name = NULL, $data = array()) {
	// Get the full route name
	$route = Route::currentRouteName();

	// Is a name variable provided?
	if($name != NULL) {
		// There is, so lets cut out the last part of the string
		$last = strrchr($route, '.');
		$route = str_replace($last, '', $route);
		// Now add the name to the end of the route
		$route = $route.'.'.$name;
	}
	
	// Now lets get the view
	return view($route, $data);
}