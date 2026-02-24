<?php

namespace WWW\Controllers;

use WWW\Models\User;
use WWW\Helpers\Debug;

class UserController{

    public function profilo(){
        include __DIR__.'/../Views/utente/profilo.php';
    }

    public function biglietti(){
        include __DIR__.'/../Views/utente/biglietti.php';
    }

    public function store(){
        $nome = $_POST['nome'] ?? null;
        $cognome = $_POST['cognome'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $password_confirm = $_POST['password_confirm'] ?? null;

        $user = User::getUserByEmail($email);

        if($password !== $password_confirm){
            echo "le password non coincidono";
            return;
        }
        else{
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
        }

        if($user){
            echo "Utente già registrato";
            return;
        }else{

            if($nome && $cognome && $email){
                User::create($nome, $cognome, $email, $password_hash);
                header('Location: /');
            } else {
                echo "Errore: dati mancanti";
            }            
        }
    }

    public function update(){
        $nome = $_POST['nome'] ?? null;
        $cognome = $_POST['cognome'] ?? null;
        $email = $_POST['email'] ?? null;

        if($nome && $cognome && $email){
            User::update($_POST['id_utente'],$nome, $cognome, $email);
            header('Location: /');
        } else {
            echo "Errore: dati mancanti";
        }
    }

    public function resetPassword(){
        $email = $_POST['email'] ?? null;

        if($email && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $user = User::getUserByEmail($email);
        }

        if($user){
            $new_password = bin2hex(random_bytes(8));

            User::updatePassword($user['cod_cliente'], password_hash($new_password, PASSWORD_BCRYPT));

            include __DIR__.'/../Views/utente/new_password.php';
            
        } 
        else{
            echo "utente non registrato";
        }   
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: /');
        exit();
    } 
}