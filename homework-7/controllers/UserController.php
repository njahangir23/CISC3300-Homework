<?php

namespace controllers;

use models\UserModel;

class UserController{

    public function serveHtmlPage() {
        include './views/homework-7.html';
        exit ();
    }
    
    public function serveJson (){
        $user = new UserModel();
        header("Content-Type: application/json");
        echo json_encode($user->getAllUsers());
        exit();
    }
}
