<?php

require_once('Database.php');

class User
{
    private static $database;

    private $User_D_Airport;
    private $User_A_Airport;
    private $User_A_Date;
    private $User_D_Date;

    function __construct($User_D_Airport,$User_A_Airpor,$User_A_Date,$User_D_Date)
    {
       this-> $User_D_Airport =$User_D_Airport;
       this-> $User_A_Airport =$User_A_Airport;
       this-> $User_A_Date = $User_A_Date;
       this-> $User_D_Date =$User_D_Date;
        
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