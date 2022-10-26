<?php

namespace App\Controllers;

use App\Models\UserModel;
class Login extends BaseController{


    public function index(){
        echo view('templates/header');
        echo view('pages/login');
        echo view('templates/footer');
    }

    public function login(){
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $userModel = new UserModel();
        $user = $userModel->getUser($email);

        if($user){
            if($user['password'] == $password){
                $sessionData = [
                    'id' => $user['id'],
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'email' => $user['email'],
                    'rol' => $user['rol'],
                    'isLoggedIn' => true
                ];
                $session = session();
                $session->set($sessionData);
                return redirect()->to('/dashboard');
            }else{
                $session = session();
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login');
            }
        }else{
            $session = session();
            $session->setFlashdata('msg', 'El usuario no existe');
            return redirect()->to('/login');
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}