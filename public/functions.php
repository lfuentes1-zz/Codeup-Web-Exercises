<?php

// inputHas($key): returns true or false based on whether the key is available.
function inputHas ($key) {
	return (isset($_REQUEST[$key])) ? TRUE : FALSE;
}

// inputGet($key): returns the value specified by the key, or null if the key is not set.
function inputGet($key) {
	return (inputHas($key)) ? escape($_REQUEST[$key]) : NULL;
}

// escape($input): returns the input as a safely escaped string.
function escape($input) {
	return htmlspecialchars(strip_tags($input));
}