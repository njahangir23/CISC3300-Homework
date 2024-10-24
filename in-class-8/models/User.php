<?php

namespace models;

class User {
    public function getAllUsers() {
        return [
            ['id' => 1, 'name' => 'Jo'],
            ['id' => 2, 'name' => 'Ja'],
            ['id' => 3, 'name' => 'Alan']
        ];
    }
}