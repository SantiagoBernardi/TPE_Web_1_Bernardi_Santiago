<?php
include_once 'app\model\anurosmodel.php';
include_once 'app\view\view.php';
include_once 'app/helper/userHelper.php';
include_once 'app\model\ecosistemasmodel.php';

    class AnurosController {
        
        private $AnurosModel;
        private $View;
        private $helper;
        private $EcosistemasModel;

        function __construct() {
            $this->AnurosModel = new AnurosModel();
            $this->View = new View();
            $this->helper = new userHelper();
            $this->EcosistemasModel = new EcosistemasModel();
        }
        
        function ShowAnuros() {
            $this->helper->checkInicio();
            $bd = $this->AnurosModel->getAllAnuros();
            $bd2 = $this->EcosistemasModel->getEcosistemas();
            $this->View->showAnuros($bd, $bd2);
            
        }

        function showAnurosById($id){
            $this->helper->checkInicio();
            $bd = $this->AnurosModel->getAnurosById($id);
            $this->View->showAnurosBy($bd);
        }

        function showAnurosByEcosistema($id){
            $this->helper->checkInicio();
            $bd = $this->AnurosModel->getAnurosByEcosistema($id);
            $this->View->showAnurosBy($bd);
        }

        function addAnuro(){
            $this->helper->checkLoggedIn();
            $foto = $_POST['foto'];
            $especie = $_POST['especie'];
            $familia = $_POST['familia'];
            $conservacion = $_POST['conservacion'];
            $ecosistema = $_POST['ecosistema'];
    
            $this->AnurosModel->addAnuro($foto,$especie,$familia,$conservacion,$ecosistema);
            header("Location: " . BASE_URL . "home"); 
        }

        function deleteAnuro($id){
            $this->helper->checkLoggedIn();
            $this->AnurosModel->deleteAnuro($id);
            header("Location: " . BASE_URL . "home"); 
        }

        function editAnuro($id){
            $this->helper->checkInicio();
            $bd = $this->AnurosModel->getAllAnuros();
            $bd2 = $this->EcosistemasModel->getEcosistemas();
            $this->View->showAnuros($bd, $bd2, $edit = true, $id);
        }

        function sendeditAnuro($id){
            $this->helper->checkLoggedIn();
            $foto = $_POST['fotoedit'];
            $especie = $_POST['especieedit'];
            $familia = $_POST['familiaedit'];
            $conservacion = $_POST['conservacionedit'];
            $ecosistema = $_POST['ecosistemaedit'];
    
            $this->AnurosModel->editAnuro($foto,$especie,$familia,$conservacion,$ecosistema,$id);
            header("Location: " . BASE_URL . "home");
    
        }
}