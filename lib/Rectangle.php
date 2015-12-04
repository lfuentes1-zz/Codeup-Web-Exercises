<?php

class Rectangle {

	public static $height;
	public static $width;

	public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public static function area ($height, $width)
    {
    	return $height * $width;
    }
}