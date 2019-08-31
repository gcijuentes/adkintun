<?php
class Database
{
    private static $dbName = 'gmaps' ;
    private static $dbHost = 'gabrielcifuentes33266.ipagemysql.com';
    private static $dbUsername = 'user_gmaps';
    private static $dbUserPassword = 'gmaps2544634';
     
  
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        }
        catch(PDOException $e)
        {
            echo 'ERROR';
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>