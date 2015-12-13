<?php

class DateRangeException extends Exception { }

class Input
{
    //checks if an input is empty string or not
    public static function setAndNotEmpty($key)
    {
        if(isset($_REQUEST[$key]) && $_REQUEST[$key] != '')
        {
            return true;
        } else {
            throw new OutOfRangeException ('Empty Field Not Allowed!');
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

    public static function getDate($key, $min = 'January 1, 1900', $max = 0)
    {
        $inputValue = self::get($key);
        if ($max == 0)
        {
            $max = date("Y-m-d");
        }
        try {
            $inputDateObject = new DateTime($inputValue);
        } catch (Exception $e) {
            throw new DomainException ("Invalid Date!");
        }

        $minDateObject = new DateTime($min);
        $maxDateObject = new DateTime($max);
        $minDateObjectFormatted = strtotime($minDateObject->format('Y-m-d'));
        $maxDateObjectFormatted = strtotime($maxDateObject->format('Y-m-d'));
        $inputDateObjectFormatted = strtotime($inputDateObject->format('Y-m-d'));
        
        if (($inputDateObjectFormatted < $minDateObjectFormatted) || ($inputDateObjectFormatted > $maxDateObjectFormatted))
        {
            throw new DateRangeException ("Must Be Between January 1, 1900 and today!");
        }
        return $inputDateObject;
    }

    public static function getString($key, $min = 1, $max = 50  )
    {
        $inputValue = self::get($key);
        if (!is_string($inputValue))
        {
            throw new InvalidArgumentException ("Expecting A String!");
        }
        if ((!is_numeric($min)) || (!is_numeric($max)))
        {
            throw new InvalidArgumentException ("Expecting A Numeric Value!");
        }
        if ($inputValue == "") 
        {
            throw new OutOfRangeException ("Empty Field Not Allowed!");
        }
        if ((strlen($inputValue) < $min) || (strlen($inputValue) > $max))
        {   
            throw new LengthException ("The Supplied String Length Must Be Between 1 and 50 Characters!");
        }
        if (($min < 1) || ($max > 50))
        {
            throw new RangeException ("Out of Range (Expecting A Number Between 1 and 50)!");
        }
        return ($inputValue);
    }

    public static function getNumber($key, $min = 0, $max = 3800000000.00)
    {
        $inputValue = trim(self::get($key));
        if ((!is_numeric($min)) || (!is_numeric($max)))
        {
            throw new InvalidArgumentException ("Expecting A Numeric Value!");
        }
        if ($inputValue == "") 
        {
            throw new OutOfRangeException ("Empty Field Not Allowed!");
        }
        if (!is_numeric($inputValue)) {
            throw new DomainException ("Expecting A Numeric Value!");
        }
        if (($inputValue < $min) || ($inputValue > $max))
        {
            throw new RangeException ("Out Of Range (Expecting A Number Between 0 and 3.8 billion)!");
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
