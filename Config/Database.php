<?php
//connessione al DB.

namespace WWW\Config;

use PDO;
Use PDO_EXCEPTION;

class Database{
    private static $host = 'db';
    private static $db_name = 'test';
    private static $user = 'root';
    private static $password = 'root';

    public static $conn;

    public static function getConnection(){
        self::$conn = null;
        $dsn = 'mysql:host='.self::$host.'; dbname='.self::$db_name;

        try{
            self::$conn = new PDO($dsn,self::$user, self::$password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDO_EXCEPTION $e){
            echo "Errore di connessione ". $e->getMessage();
        }

        return self::$conn;

    }

}