<?php
class Input
{
    //checks if an input is empty string or not
    public static function setAndNotEmpty($key)
    {
        if(isset($_REQUEST[$key]) && $_REQUEST[$key] != '')
        {
            return true;
        }
    }

    // escape($input): returns the input as a safely escaped string.
    public static function escape($input) {
        return htmlspecialchars(strip_tags($input));
    }

    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return (isset($_REQUEST[$key])) ? TRUE : FALSE;
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        return (self::has($key)) ? ($_REQUEST[$key]) : NULL;
    }

    public static function getString($key)
    {
        $inputValue = self::get($key);
        if (!is_string($inputValue)) {
            throw new Exception ('{$key} is expected to be a string!');
        }
        return ($inputValue);
    }

    public static function getNumber($key)
    {
        $inputValue = self::get($key);
        if (!is_numeric($inputValue)) {
            throw new Exception ('{$key} is expected to be a number!');
        }   
        return floatval($inputValue);
    }


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
