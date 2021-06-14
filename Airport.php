<?php

require_once('Database.php');

class Airport 
{

    private static $database;

    private $APcode; //String
    private $CityCode; //String
    private $Name; //String
    private $City; //String
    private $CountryCode; //String
    private $RegionCode; //String
    private $Latitude; //double
    private $Longitude; //double
    private $TimeZone; //String
   
   
    function __construct($APcode, $CityCode, $Name, $City, $CountryCode, $RegionCode, $Latitude, $Longitude, $Longitude, $TimeZone)
    {
        this->APCode = $APcode;
        this->CityCode = $CityCode;
        this->Name = $Name;
        this->Cit = $City;
        this->CountryCode = $CountryCode;
        this->RegionCode = $RegionCode;
        this->Latitude = $Latitude;
        this->Longitude = $Longitude;
        this->TimeZone = $TimeZone;
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