<?php

class Input
{
    //checks if an input is empty string or not
    public static function setAndNotEmpty($key)
    {
        if(isset($_REQUEST[$key]) && $_REQUEST[$key] != '')
        {
            return true;
        } else {
            throw new OutOfRangeException ('Empty Field:  Empty Field Not Allowed!');
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

    //9.3.1
    public static function getDate($key)
    {
        $inputValue = self::get($key);
        try {
            $dateTimeObject = new DateTime($inputValue);
        } catch (Exception $e) {
            throw new DomainException ('Date Established:  Invalid Date!');
        }
        return $dateTimeObject;
    }

    public static function getString($key, $min = 1, $max = 50)
    {
        $inputValue = self::get($key);
        if (!is_string($inputValue))
        {
            throw new InvalidArgumentException ("{$key}:  Expecting A String!");
        }
        if ((strlen($inputValue) < $min) || (strlen($inputValue) > $max))
        {   
            throw new LengthExpection ("The Supplied String Length Must Be Between 1 and 50 Characters!");
        }
        if ($inputValue == "") 
        {
            throw new OutOfRangeException ("{$key}:  Empty Field Not Allowed!");
        }
        if (($min < 1) || ($max > 50))
        {
            throw new RangeException ("Min must be at least 1 and max must be less than 50!");
        }
        if ((!is_numeric($min)) || (!is_numeric($max)))
        {
            throw new DomainException ("{$min} and {$max}:  Expecting An Integer!");
        }
        return ($inputValue);
    }

    public static function getNumber($key, $min = 0, $max = 3800000000.00)
    {
        $inputValue = trim(self::get($key));
        if (!is_numeric($inputValue)) {
            throw new DomainException ("Area In Acres: Expecting A Number!");
        }
        if ((!is_numeric($min)) || (!is_numeric($max)))
        {
            throw new InvalidArgumentException ("{$min} and {$max}:  Expecting An Integer!");
        }
        if ($inputValue == "") 
        {
            throw new OutOfRangeException ("{$key}:  Empty Field Not Allowed!");
        }
        if (($inputValue < $min) || ($inputValue > $max))//test this case
        {
            throw new RangeException ("Min must be at least 0 and max must be less than 3.8 million!");
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
