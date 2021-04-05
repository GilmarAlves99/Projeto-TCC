<?php
require_once '../View/conexao.php';
class UsuarioModel
{


    public function listarpostagens()
    {

        $conexao = ConexaoPDO::getInstance();
    
        $consulta  = "SELECT * FROM tb_postagens  INNER JOIN usuario ON usuario.id_usuario  = tb_postagens.id_usuario GROUP BY idPost DESC";
        $stmt = $conexao->prepare($consulta);
       
        $stmt->execute();
        $dados = $stmt->fetchAll();
        return $dados;
    
    }
    
 

    public function listarusuario()
    {

        $conexao = ConexaoPDO::getInstance();
        $consulta = "SELECT * FROM usuario ";;
        
        $stmt = $conexao->prepare($consulta);
       
        $stmt->execute();
        $dados = $stmt->fetchAll();
        return $dados;
    
    }
    public function listarProfissionais()
    {

        $conexao = ConexaoPDO::getInstance();
        $consulta = "SELECT * FROM usuario WHERE tipousuario='Profissional'";;
        
        $stmt = $conexao->prepare($consulta);
       
        $stmt->execute();
        $dados = $stmt->fetchAll();
        return $dados;
    
    }
    public function login($email, $senha)
    {
        $conexao = ConexaoPDO::getInstance();
        $query = "SELECT * FROM usuario WHERE email =:email AND senha =:senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue("email", $email);
        $stmt->bindValue("senha", $senha);
        $stmt->execute();
        //vamos pegar quantos registro tem com esse email e senha
        if ($stmt->rowCount() > 0) {
            $dado = $stmt->fetch(); // pegando um usuario só
            $_SESSION['idUser'] = $dado['id_usuario'];
          
            return true;
        } else {
            return false;
        }
    }
    // qual usuario está logado
    public function logged($id)
    {
        $conexao = ConexaoPDO::getInstance();

        $query = "SELECT * FROM usuario WHERE id_usuario =:id_usuario";

        $stmt =   $conexao->prepare($query);
        $stmt->BindValue("id_usuario", $id, PDO::PARAM_INT);
        $stmt->execute();


        //quantos registro tem dentro dessa consulta
        if ($stmt->rowCount() > 0) {
            $array = $stmt->fetch();
        }
        return $array;
    }
    
 
    public function excluirUsuarioID($id_usuario)
    {
        $conexao = ConexaoPDO::getInstance();

        $consulta = "DELETE FROM usuario WHERE id_usuario=:id_usuario";
       
        $stmt = $conexao->prepare($consulta);
        $stmt->bindValue("id_usuario", $id_usuario, PDO::PARAM_INT);
        $stmt->execute();

        // irá retornar quantos registros foram afetados
        return $stmt->rowCount();
    }
    public function listarPostID($id_usuario)
    {
        $conexao = ConexaoPDO::getInstance();

        $consulta = "SELECT * FROM tb_postagens WHERE id_usuario=:id";

        $stmt = $conexao->prepare($consulta);
        $stmt->bindValue("id", $id_usuario, PDO::PARAM_INT);
        $stmt->execute();

        $post = $stmt->fetchAll();
        return $post;
    }

}
?>