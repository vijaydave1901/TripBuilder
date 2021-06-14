<?php

require_once('Database.php');

class Flights 
{

    private static $database;

    private $airline; //String
    private $number; //String
    private $departure_airport; //String
    private $departure_time; //String
    private $arrival_airport; //String
    private $arrival_time; //String
    private $price; //String

    function __construct($airline ,$number ,$departure_airport ,$departure_time ,$arrival_airport ,$arrival_time ,$price)
    {
        this->airline = $airline;
        this->number = $number;
        this->departure_airport = $departure_airport;
        this->departure_time = $departure_time;
        this->arrival_airport = $arrival_airport;
        this->arrival_time = $arrival_time;
        this->price = $price;
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