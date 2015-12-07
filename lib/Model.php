<?php

class Model {

	// Array to store our key/value 
	private $attributes = [];	

    // Magic setter to populate $attributes array
    public function __set($key, $value)
    {
        // Set the $key 'key' to hold $value in $attributes
        $this->attributes[$key] = $value;
    }

    // Magic getter to retrieve values from $attributes
    public function __get($key)
    {
        // Check for existence of array 'key' $key
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }

        return null;
    }
}

$db = new Model();
$db->name = 'Letty Fuentes';
$db->course = 'Codeup';
$db->city = 'San Antonio';
echo "{$db->name} is taking the {$db->course} course in {$db->city}" . PHP_EOL;

