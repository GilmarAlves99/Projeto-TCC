<?php
require_once '../View/conexao.php';
class PostagemModel
{

    public function excluirPostagemID($idPost)
    {
        $conexao = ConexaoPDO::getInstance();

        $consulta = "DELETE FROM tb_postagens WHERE idPost=:id_post";
       
        $stmt = $conexao->prepare($consulta);
        $stmt->bindValue("id_post", $idPost, PDO::PARAM_INT);
        $stmt->execute();

        // irá retornar quantos registros foram afetados
        return $stmt->rowCount();
    }

}