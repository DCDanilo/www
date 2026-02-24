<?php 

namespace WWW\Controllers;
use WWW\Models\User;

Class AuthController {
    public function login(){
        include __DIR__.'/../Views/utente/accedi.php';
    }

    public function register(){
        include __DIR__.'/../Views/utente/registrati.php';
    }

    public function resetPassword(){
        include __DIR__.'/../Views/utente/reset-password.php';
    }

    public function authenticate(){
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        

        if($email && $password){
            $user = User::getUserByEmail($email);
        }

        if($user['email'] == $email &&  password_verify($password, $user['password'])){
            session_start();
            $_SESSION['user_id'] = $user['cod_cliente'];
            $_SESSION['user_name'] = $user['nome'];
            header('Location: /');
        } else {
            echo "Credenziali non valide";
        }
    }
    
}