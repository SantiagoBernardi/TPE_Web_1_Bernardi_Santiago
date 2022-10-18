<?php

    class EcosistemasModel {

        private function connect() {
            $db = new PDO('mysql:host=localhost;'.'dbname=bd_anuros;charset=utf8', 'root', '');
            return $db; 
        }

        function getEcosistemas() {
            $db = $this->connect();

            $query = $db->prepare('SELECT * FROM ecosistemas');
            $query->execute();

            return  $query->fetchAll(PDO::FETCH_OBJ);
        }

        function addEcosistema($ecosistema){

            $db = $this->connect();
    
            $query = $db->prepare("INSERT INTO ecosistemas (ecosistema) VALUES (?)");
            $query->execute([$ecosistema]);
    
        }

        function deleteEcosistema($id){

            $db = $this->connect();
        
            $query = $db->prepare('DELETE FROM ecosistemas WHERE id_e = ?');
            $query->execute([$id]);
            
        }

        function editEcosistema($ecosistema,$id){

            $db = $this->connect();
    
            $query = $db->prepare("UPDATE ecosistemas SET ecosistema = ? WHERE id_e = ?");
            $query->execute([$ecosistema,$id]);
    
        }

    }