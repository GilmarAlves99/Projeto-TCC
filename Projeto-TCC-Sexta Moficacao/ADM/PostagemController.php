<?php

require_once 'PostagemModel.php';
class PostagemController
{
    
    public static function excluirPostagemID($idPost)
    {
        $mPost = new PostagemModel();

     
        $post =  $mPost->excluirPostagemID($idPost);

        return $post;
    }
  
}