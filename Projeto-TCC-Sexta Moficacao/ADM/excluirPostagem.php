<?php


require_once 'PostagemController.php';

$idPost= $_GET['idPost'];

//mandando pro meu controller
$post= PostagemController::excluirPostagemID($idPost);

if($post >0){
    echo "Registro excluido";
    }else{
        echo "Ocorrou uma falha na exclusão";
    }
    
?>