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
        $query= "SELECT * FROM utenti WHERE id_utente = ?";
        $stmt = self::$db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}