<?php
//Entry point
//Include necessary files
require_once __DIR__ . '../config/db.php';
require_once __DIR__ . '../classes/User.php';

//Handle requests

$action = "login";

switch ($action) {
    case 'login':
        require_once __DIR__ . '../views/login.php';
        break;
    case '':
        require_once __DIR__ . '../views/home.php';
        break;
    
    default:
        require_once __DIR__ . '../views/404.php';
        break;
}
?>