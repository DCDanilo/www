<?php

namespace WWW\Models;

use WWW\Config\Database;

class User {
    public static function all() {
        $query("SELECT * FROM utenti");
        $stmt = $db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}