<?php

namespace WWW\Contollers;

use WWW\Models\User;

class UserController{
    public function index(){
        $users = User::all();
        include __DIR__ . '/../views/user_list.php';
    }

}