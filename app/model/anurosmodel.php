<?php

    class AnurosModel {

        private function connect() {
            $db = new PDO('mysql:host=localhost;'.'dbname=bd_anuros;charset=utf8', 'root', '');
            return $db; 
        }

        function getAllAnuros() {
            $db = $this->connect();

            $query = $db->prepare('SELECT * FROM anuros INNER JOIN ecosistemas on anuros.id_ecosistema_fk = ecosistemas.id_e');
            $query->execute();

            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function getAnurosById($id){

            $db = $this->connect();
        
            $query = $db->prepare('SELECT * FROM anuros INNER JOIN ecosistemas on anuros.id_ecosistema_fk = ecosistemas.id_e WHERE anuros.id = ?');
            $query->execute([$id]);
            
            return  $query->fetchAll(PDO::FETCH_OBJ);
    
        }
        
        function getAnurosByEcosistema($id){

            $db = $this->connect();
        
            $query = $db->prepare('SELECT * FROM anuros INNER JOIN ecosistemas on anuros.id_ecosistema_fk = ecosistemas.id_e WHERE ecosistemas.id_e = ?');
            $query->execute([$id]);
            
            return  $query->fetchAll(PDO::FETCH_OBJ);
    
        }

        function addAnuro($foto,$especie,$familia,$conservacion,$ecosistema){

            $db = $this->connect();
    
            $query = $db->prepare("INSERT INTO anuros (foto,especie,familia,conservacion,id_ecosistema_fk) VALUES (?, ?, ?, ?, ?)");
            $query->execute([$foto,$especie,$familia,$conservacion,$ecosistema]);
    
        }

        function deleteAnuro($id){

            $db = $this->connect();
        
            $query = $db->prepare('DELETE FROM anuros WHERE id = ?');
            $query->execute([$id]);
            
        }

        function editAnuro($foto,$especie,$familia,$conservacion,$ecosistema,$id){

            $db = $this->connect();
    
            $query = $db->prepare("UPDATE anuros SET foto = ? , especie = ? , familia= ? , conservacion= ? , id_ecosistema_fk = ? WHERE id = ?");
            $query->execute([$foto,$especie,$familia,$conservacion,$ecosistema,$id]);
    
        }
    }