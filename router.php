<?php
include_once 'app\controller\anuroscontroller.php';
include_once 'app\controller\usercontroller.php';
include_once 'app\controller\ecosistemascontroller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}else {
    $action = 'login';
}   

$params = explode('/', $action);
        
$anuroscontroller = new AnurosController();
$usercontroller = new UserController();
$ecosistemascontroller = new EcosistemasController();

switch ($params[0]) {
    case 'login':
        $usercontroller->ShowLogin();
        break;
    case 'home':
        $anuroscontroller->ShowAnuros();
        $ecosistemascontroller->ShowEcosistemas();
        break;
    case 'anuro':
        $anuroscontroller->showAnurosById($params[1]);
        break;
    case 'anuros':
        $anuroscontroller->showAnurosByEcosistema($params[1]);
        break;
    case 'addanuro':
        $anuroscontroller->addAnuro();
        break;
    case 'deleteanuro':
        $anuroscontroller->deleteAnuro($params[1]);
        break;
    case 'editanuro':
        $anuroscontroller->editAnuro($params[1]);
        break;
    case 'sendeditanuro':
        $anuroscontroller->sendeditAnuro($params[1]);
        break;
    case 'addecosistema':
        $ecosistemascontroller->addEcosistema();
        break;
    case 'deleteecosistema':
        $ecosistemascontroller->deleteEcosistema($params[1]);
        break;
    case 'editecosistema':
        $ecosistemascontroller->editEcosistema($params[1]);
        break;
    case 'sendeditecosistema':
        $ecosistemascontroller->sendeditEcosistema($params[1]);
        break;
    case 'validate':
        $usercontroller->Logearse();
        break;
    case 'logout':
        $usercontroller->logout();
        break;
    default:
        echo('404 Page not found');
        break;
}