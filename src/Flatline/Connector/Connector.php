<?php

namespace Flatline\Connector;


class Connector
{
    private $host ="localhost";
    private $username = "";
    private $password ="";
    private $dbname ="";

    public function __construct($arr_settings){
        $this->$host = $arr_settings["host"];
        $this->$username = $arr_settings["username"];
        $this->$password = $arr_settings["password"];
        $this->$dbname = $arr_settings["dbname"];
    }

    public function open_database_connection()
    {
        $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        return $connection;
    }
    public function close_database_connection(&$connection)
    {
        $connection = null;
    }


    
}
