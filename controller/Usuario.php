<?php 

namespace controller;

class Usuario{

    public function registrar(){
        $user = new \model\Usuario();
        print_r($_POST);
        $foi = true;
        foreach($_POST as $value){
            if(empty($value)){
                $foi = false;
                break;
            }
        }
        if($_POST['vsenha'] != $_POST['senha']){
            echo "escreve direito";
            $foi = false;
        }
        if($user->checkIfEmailExists($_POST['email'])){
            echo "Este email já existe.";
            $foi = false;
        }
        if($foi){
            if($user->newUser($_POST)){
                echo "foi";
            }else{
                echo "n foi";
            }
        }else{
            echo "preencha os campos";
        }

    }

}

?>