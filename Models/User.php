<?php

namespace WWW\Models;

use WWW\Config\Database as Database;
use PDO;


class User {
    private static $db;

    public static function init() {
        self::$db = Database::getConnection();
    }

    public static function all() {
        if (!self::$db) {
            self::init();
        }
        $query= "SELECT * FROM utenti";
        $stmt = self::$db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getUserById($id) {
         if (!self::$db) {
            self::init();
        }
        $query= "SELECT * FROM utenti WHERE id_utente = :id";
        $stmt = self::$db->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($nome, $cognome, $email){
        if (!self::$db) {
            self::init();
        }

        $query="INSERT INTO utenti (nome, cognome, email) VALUES (:nome, :cognome, :email)";
        $stmt = self::$db->prepare($query);

        $stmt->bindParam('nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam('cognome', $cognome, PDO::PARAM_STR);
        $stmt->bindParam('email', $email, PDO::PARAM_STR);

        $stmt->execute();    
    }

    public static function delete($id){
        if (!self::$db) {
            self::init();
        }

        $query="DELETE FROM utenti WHERE id_utente = :id";
        $stmt = self::$db->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        $stmt->execute();    
    }

    public static function update($id,$nome, $cognome, $email){
    if (!self::$db) {
        self::init();
    }

        $query="UPDATE utenti SET nome = :nome, cognome = :cognome, email = :email WHERE id_utente = :id";
        $stmt = self::$db->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':cognome', $cognome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        $stmt->execute();    
    }
}