<?php

class Validator
{
	public function __construct() { }

	public function __destruct() { }

	public function sanitise_string($p_string_to_sanitise)
	{
		$sanitised_string = false;

		if (!empty($p_string_to_sanitise))
		{
			$sanitised_string = filter_var($p_string_to_sanitise, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		}
		return $sanitised_string;
	}

	public function sanitise_email($p_string_to_sanitise)
	{
    $cleaned_string = false;

		if (!empty($p_string_to_sanitise))
		{
			$sanitised_string = filter_var($p_string_to_sanitise, FILTER_SANITIZE_EMAIL);
			$cleaned_string = filter_var($sanitised_string, FILTER_VALIDATE_EMAIL);
		}
		return $cleaned_string;
	}
}