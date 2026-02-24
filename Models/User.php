<?php

namespace WWW\Models;

use WWW\Config\Database as Database;
use WWW\Helpers\Debug;
use PDO;


class User {
    private static $db;

    public static function init() {
        self::$db = Database::getConnection();
    }

    public static function getUserById($id) {
         if (!self::$db) {
            self::init();
        }
        $query= "SELECT * FROM clienti WHERE cod_cliente = :id";
        $stmt = self::$db->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);           

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($nome, $cognome, $email, $password){
        if (!self::$db) {
            self::init();
        }

        $query="INSERT INTO clienti (nome, cognome, email, password, creato_il, modificato_il) VALUES (:nome, :cognome, :email, :password, NOW(), NOW())";
        $stmt = self::$db->prepare($query);

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':cognome', $cognome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        $stmt->execute();    
    }

    public static function delete($id){
        if (!self::$db) {
            self::init();
        }

        $query="DELETE FROM clienti WHERE cod_cliente = :id";
        $stmt = self::$db->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        $stmt->execute();    
    }

    public static function update($id,$nome, $cognome, $email){
    if (!self::$db) {
        self::init();
    }

        $query="UPDATE clienti SET nome = :nome, cognome = :cognome, email = :email, modificato_il = NOW() WHERE cod_cliente = :id";
        $stmt = self::$db->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':cognome', $cognome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        $stmt->execute();    
    }

    //ricerca per cognome verrá utilizzato per il login
    public static function getUserByEmail($email) {
         if (!self::$db) {
            self::init();
        }
        $query= "SELECT * FROM clienti WHERE email = :email";
        $stmt = self::$db->prepare($query);

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function updatePassword($id, $new_password){
         if (!self::$db) {
            self::init();
        }

        $query="UPDATE clienti SET password = :password, modificato_il = NOW() WHERE cod_cliente = :id";
        $stmt = self::$db->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':password', $new_password, PDO::PARAM_STR);

        $stmt->execute();  
    }
}