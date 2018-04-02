<?php

    namespace model;

    class Usuario{
        public function newUser($array){
            $pdo = Database::connect();
            $insert = $pdo->prepare("insert into clientes values(null,:nome,:end,:email,:telefone,:cpf,:senha)");
            $insert->bindParam(":nome",$array['nome'],\PDO::PARAM_STR);
            $insert->bindParam(":end",$array['endereco'],\PDO::PARAM_STR);
            $insert->bindParam(":email",$array['email'],\PDO::PARAM_STR);
            $insert->bindParam(":telefone",$array['telefone'],\PDO::PARAM_STR);
            $insert->bindParam(":cpf",$array['cpf'],\PDO::PARAM_STR);
            $insert->bindParam(":senha",$array['senha'],\PDO::PARAM_STR);
            return $insert->execute();
        }
        public function checkIfEmailExists($email){
            $pdo = Database::connect();
            $select = $pdo->prepare("select email from clientes where email=:email");
            $select->bindParam(":email",$email,\PDO::PARAM_STR);
            $select->execute();
            if($select->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }
    }