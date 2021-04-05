<?php


require_once '../Controller/UsuarioController.php';

$id_usuario= $_GET['id_usuario'];

//mandando pro meu controller
$usuario = UsuarioController::excluirUsuarioID($id_usuario);

if($usuario >0){
    echo "Registro excluido";
    }else{
        echo "Ocorrou uma falha na exclusão";
    }
    
?>