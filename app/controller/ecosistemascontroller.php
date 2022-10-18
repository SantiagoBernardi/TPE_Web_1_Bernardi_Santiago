<?php

include_once 'app\model\ecosistemasmodel.php';
include_once 'app\view\view.php';
include_once 'app/helper/userHelper.php';

    class EcosistemasController {

        private $EcosistemasModel;
        private $View;
        private $helper;

        function __construct() {
            $this->EcosistemasModel = new EcosistemasModel();
            $this->View = new View();
            $this->helper = new userHelper();
        }

        function ShowEcosistemas() {
            $this->helper->checkInicio();
            $bd = $this->EcosistemasModel->getEcosistemas();
            $this->View->showEcosistemas($bd);
        }

        function addEcosistema(){
            $this->helper->checkLoggedIn();
            $ecosistema = $_POST['ecosistema'];
    
            $this->EcosistemasModel->addEcosistema($ecosistema);
            header("Location: " . BASE_URL . "home"); 
        }

        function deleteEcosistema($id){
            $this->helper->checkLoggedIn();
            $this->EcosistemasModel->deleteEcosistema($id);
            header("Location: " . BASE_URL . "home"); 
        }

        function editEcosistema($id){
            $this->helper->checkInicio();
            $bd = $this->EcosistemasModel->getEcosistemas();
            $this->View->ShowEcosistemas($bd, $edit = true, $id);
        }

        
        function sendeditEcosistema($id){
            $this->helper->checkLoggedIn();
            $ecosistema = $_POST['ecosistemaedit'];
            $this->EcosistemasModel->editEcosistema($ecosistema,$id);
            header("Location: " . BASE_URL . "home");
    
        }

    }