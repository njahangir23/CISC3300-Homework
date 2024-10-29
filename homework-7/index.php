<?php

require 'models/UserModel.php';
require 'controllers/UserController.php';

use controllers\UserController;

$controller = new UserController();

if ($_SERVER['REQUEST_URI'] === '/users') {

    $controller->serveJson();
} else {
    $controller->serveHtmlPage();
}
?>