<?php

namespace WWW\Controllers;

use WWW\Models\User;
use WWW\Helpers\Debug;

class UserController{
    public function index(){
        $users = User::all();
        include __DIR__ . '/../Views/user_list.php';
    }

    public function show(){        
        $id = $_GET['id'] ?? null;
        if($id==null){
            echo "Utente non trovato";
            return;
        }        
        $user= User::getUserById($id);
        include __DIR__ . '/../Views/user_details.php';
    }
}