<?php

require_once('Database.php');

class Airline
{
    private static $database;

    private $ALCode;
    private $Name;

    function __construct($ALCode, $Name)
    {
        $this->ALCode = $ALCode;
        $this->Name = $Name;
    }

    public static function init_Database() 
    {
        if(! isset(self::$database))
        {
            self::$database = new Database();
        }
    }

}

?>