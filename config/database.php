<?php
//connessione al DB.

namespace WWW\config;

use PDO;
Use PDO_EXCEPTION;

class Database{
    private static $host = 'db';
    private static $db_name = 'test';
    private static $user = 'root';
    private static $password = 'root';

    private static $conn;

    public static getConnection(){
        self::$conn = null;

        try{
            self::$conn = new PDO(
                'mysql:host='.self::$host.'; '
                'dbname='.self::$dbname, 
                self::$user, 
                self::$pass
            )
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conn->exec();
        }
        catch(PDO_EXCEPTION $e){
            echo "Errore di connessione ". $e->getMessage();
        }

        return self::$conn;

    }

}