<?php

if (!function_exists('str_contains')) {
	/**
	 * Determine if a string contains a given substring
	 *
	 * @param string $haystack The string to search in.
	 * @param string $needle The substring to search for in the haystack.
	 * @return bool Returns true if needle is in haystack, false otherwise.
	 */
	function str_contains($haystack, $needle)
	{
		return '' === $needle || false !== strpos($haystack, $needle);
	}
}

if (!function_exists('str_starts_with')) {
	/**
	 * Checks if a string starts with a given substring
	 *
	 * @param string $haystack The string to search in.
	 * @param string $needle The substring to search for in the haystack.
	 * @return bool Returns true if haystack begins with needle, false otherwise.
	 */
	function str_starts_with($haystack, $needle)
	{
		return 0 === strncmp($haystack, $needle, \strlen($needle));
	}
}

if (!function_exists('str_ends_with')) {
	/**
	 * Checks if a string ends with a given substring
	 *
	 * @param string $haystack The string to search in.
	 * @param string $needle The substring to search for in the haystack.
	 * @return bool Returns true if haystack ends with needle, false otherwise.
	 */
	function str_ends_with($haystack, $needle)
	{
		if ('' === $needle || $needle === $haystack) {
			return true;
		}

		if ('' === $haystack) {
			return false;
		}

		$needleLength = \strlen($needle);

		return $needleLength <= \strlen($haystack) && 0 === substr_compare($haystack, $needle, -$needleLength);
	}
}
