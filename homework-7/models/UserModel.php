<?php

namespace models;

class UserModel {
    public function getAllUsers() {
        return [
            ['id' => 1, 'name' => 'Lisha', 'email'=>'lisha@yahoo.com'],
            ['id' => 2, 'name' => 'Gi', 'email'=>'gi@gmail.com'],
            ['id' => 3, 'name' => 'Benthony', 'email'=>'benthony@yahoo.com']        
        ];
    }
}