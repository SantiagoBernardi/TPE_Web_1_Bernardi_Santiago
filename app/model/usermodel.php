<?php

    class UserModel{

        private function connect() {
            $db = new PDO('mysql:host=localhost;'.'dbname=bd_usuarios;charset=utf8', 'root', '');
            return $db; 
        }

        function getUsuario($user) {
            $db = $this->connect();

            $query = $db->prepare('SELECT * FROM usuarios WHERE user = ?');
            $query->execute([$user]);

            return $query->fetch(PDO::FETCH_OBJ);
        }
    }