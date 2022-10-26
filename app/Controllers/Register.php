<?php

namespace App\Controllers;

use App\Models\UserModel;
class Register extends BaseController{

    protected $userModel;
    protected $rules;

    public function __construct(){
        $this->userModel = new UserModel();
        helper('form');
        $this->rules = [
            'first_name' => 'required|min_length[4]|max_length[20]',
            'last_name' => 'required|min_length[4]|max_length[20]',
            'document' => 'required|min_length[3]|max_length[20]|is_unique[users.document]',
            // 'rol' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[3]|max_length[255]',
        ];
        
    }

    public function index(){
        echo view('templates/header');
        echo view('pages/register');
        echo view('templates/footer');
    }

    public function store(){
        if($this->validate($this->rules)){
            $data = [
                'first_name' => $this->request->getVar('first_name'),
                'last_name' => $this->request->getVar('last_name'),
                'document' => $this->request->getVar('document'),
                'rol' => 'User',
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
                'registration_date' => date('Y-m-d')
            ];
            $this->userModel->save($data);
            return redirect()->to('/login');
        }else{
            $data = [
                'validation' => $this->validator
            ];
            $session = session();
            $session->setFlashdata('errors', $data['validation']->getErrors());
            echo view('templates/header');
            echo view('pages/register', $data);
            echo view('templates/footer');
        } 
    }   
}