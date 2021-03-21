<?php
session_start();

require_once __DIR__ . '/../config/db.php';
require_once __DIR__.'/../vendor/autoload.php';

$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
if(empty($action)){
    $action = filter_input(INPUT_POST,'action',FILTER_SANITIZE_STRING);
}
use Tudublin\MainController;
use Tudublin\LoginController;

$mainController = new MainController();
$loginController = new LoginController();

switch ($action)
{
    case 'home':
    $mainController->homeAction();
    break;
    case 'contact':
    $mainController->contactAction();
    break;
    case 'login':
    $loginController->loginAction();
    break;
    case 'logout':
    $loginController->logout();
    break;
    case 'register':
    $mainController->registerAction();
    break;
    case 'processLogin':
    $loginController->processLogin();
    break;
    case 'processRegistration':
    $mainController->processRegistration();
    break;
    case 'review':
    $mainController->reviewForm();
    break;
    case 'message':
    $mainController->messageAction();
    break;
    case 'season':
        $mainController->seasonAction();
        break;

    default:
       $mainController->homeAction();
}