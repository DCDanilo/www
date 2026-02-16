<?php

namespace WWW\Controllers;

use WWW\Models\User;

class UserController{
    public function index(){
        $users = User::all();
        include __DIR__ . '/../Views/user_list.php';
    }

    public function show($id){
        $user= User::getUserById($id);
        include __DIR__ . '/../Views/user_detail.php';
    }
}