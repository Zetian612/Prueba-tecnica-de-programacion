<?php 

namespace App\Controllers;

use App\Models\UserModel;
class Dashboard extends BaseController
{

    protected $userModel;
    public function __construct(){
        $this->userModel = new UserModel();

        $session = session();
        if(!$session->get('isLoggedIn')){
            return redirect()->to('/login');
        }
        
    }

    public function index()
    {
        $users = $this->userModel->findAll();
        $data = [
            'users' => $users
        ];
        echo view('templates/header');
        echo view('pages/dashboard', $data);
        echo view('templates/footer');
    }

    public function edit($id){
        $session = session();
        if($session->get('rol') == 'User'){
            return redirect()->to('/dashboard');
        }
        $user = $this->userModel->find($id);
        $data = [
            'user' => $user
        ];
        echo view('templates/header');
        echo view('pages/admin/edit', $data);
        echo view('templates/footer');
    }

    public function update($id){
        $session = session();
        if($session->get('rol') == 'User'){
            return redirect()->to('/dashboard');
        }
        $data = [
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'document' => $this->request->getVar('document'),
            'rol' => $this->request->getVar('rol'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            // 'registration_date' => date('Y-m-d')
        ];

        $this->userModel->update($id, $data);
        return redirect()->to('/dashboard');
    }

    public function delete($id){
        $session = session();
        if($session->get('rol') == 'User'){
            return redirect()->to('/dashboard');
        }
        if ($id == session()->get('id')) {
            return redirect()->to('/dashboard');
        } else {
            $this->userModel->delete($id);
            return redirect()->to('/dashboard');
        }
    }
}