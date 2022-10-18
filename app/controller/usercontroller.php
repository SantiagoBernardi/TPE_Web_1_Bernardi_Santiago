<?php
include_once 'app\model\usermodel.php';
include_once 'app\view\view.php';
include_once 'app/helper/userHelper.php';

    class UserController {

        private $UserModel;
        private $View;
        private $helper;

        function __construct() {
            $this->UserModel = new UserModel();
            $this->View = new View();
            $this->helper = new userHelper();
        }

        function ShowLogin() {
            $this->View->showLogin();
        }

        function Logearse() {
            $user = $_POST['user'];
            $password = $_POST['password'];
            $bduser = $this->UserModel->getUsuario($user);
                if ($bduser && password_verify($password, $bduser->password)) {
                    
                    session_start();
                    $_SESSION['USER_ID'] = $bduser->id_u;
                    $_SESSION['USER_NAME'] = $bduser->user;
                    $_SESSION['IS_LOGGED'] = true;
                    
                    header("Location: " . BASE_URL . "home");
                }
                else {
                    $this->View->showLogin("El usuario o la contraseña no existe.");
                }
        }
        
        function logout() {
            $this->helper->checkInicio();
            session_destroy();
            header("Location: " . BASE_URL);
        }
    }