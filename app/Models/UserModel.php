<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['document', 'first_name','last_name', 'rol', 'email', 'password', 'registration_date'];

    public function getUser($email = false){
        if($email == false){
            return $this->findAll();
        }
        return $this->where(['email' => $email])->first();
    }

    public function insertUser($data){
        return $this->db->table($this->table)->insert($data);
    }
}