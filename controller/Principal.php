<?php

namespace controller;

class Principal{
    public function index(){
        require("view/inicio.php");
    }
    
    public function cardapio(){
    	require ('view/cardapio.php');
    }

    public function pedido(){
    	require ('view/pedido.php');
    }
    
    public function cadastro(){
        require ('view/cadastro.php');
    }
}