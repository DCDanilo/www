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
        // Debug::dd($user);
        include __DIR__ . '/../Views/user_details.php';
    }

    public function create(){
        include __DIR__ . '/../Views/user_form.php';
    }

    public function store(){
        $nome = $_POST['nome'] ?? null;
        $cognome = $_POST['cognome'] ?? null;
        $email = $_POST['email'] ?? null;

        if($nome && $cognome && $email){
            User::create($nome, $cognome, $email);
            header('Location: /users');
        } else {
            echo "Errore: dati mancanti";
        }
    }

    public function delete(){

        $id = $_GET['id'] ?? null;
        if($id==null){
            echo "Utente non trovato";
            return;
        }        
        User::delete($id);
        header('Location: /users');
        include __DIR__ . '/../Views/user_list.php';
    }

    public function edit(){
        $id = $_GET['id'] ?? null;
        $user= User::getUserById($id);

        if(!$user){
            die("Utente non trovato");
        }

        include __DIR__ . '/../Views/user_form.php';
    }

        public function update(){
        $nome = $_POST['nome'] ?? null;
        $cognome = $_POST['cognome'] ?? null;
        $email = $_POST['email'] ?? null;

        if($nome && $cognome && $email){
            User::update($_POST['id_utente'],$nome, $cognome, $email);
            header('Location: /users');
        } else {
            echo "Errore: dati mancanti";
        }
    }
}