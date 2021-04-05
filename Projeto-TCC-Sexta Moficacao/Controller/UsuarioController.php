<?php

require_once '../Model/UsuarioModel.php';
class UsuarioController
{
    
    public static function excluirUsuarioID($id_usuario)
    {
        $mUsuario = new UsuarioModel();

        //$objetoTema recebe´ra somente um objeto
        $usuario =  $mUsuario->excluirUsuarioID($id_usuario);

        return $usuario;
    }


    public static function login($email, $senha)
    {
        $mUsuario = new UsuarioModel();

        //$objetoTema recebe´ra somente um objeto
        $usuario =  $mUsuario->login($email,$senha);

        return $usuario;
    }

    public static function listarpostagens()
    {

        $mPostagens = new UsuarioModel();

        //$objetoTema recebe´ra somente um objeto
        $postagens =  $mPostagens-> listarpostagens();

        return  $postagens;
      
    }
    public static function listarusuario()
    {

        $lUsuario = new UsuarioModel();

        //$objetoTema recebe´ra somente um objeto
        $usuario =  $lUsuario-> listarusuario();
        return  $usuario;
    
    }

    public static function listarProfissionais(){

        $LProfissionais = new UsuarioModel();

        //$objetoTema recebe´ra somente um objeto
        $profissional =   $LProfissionais-> listarProfissionais();
        return   $profissional ;

    }

    public static  function logged($id)
    {

        $mUsuario = new UsuarioModel();

        //$objetoTema recebe´ra somente um objeto
        $usuario =  $mUsuario-> logged($id);
        return $usuario;


    } //de $id_usuario vai para $parametro
    public static function listarPostID($id_usuario)
    {
        // modelTemas
        $mPost = new UsuarioModel();
        $post = $mPost->listarPostID($id_usuario);

        return $post;
    }


}


