<?php
class Usuario
{
    public function login($email, $senha)
    {
        global $pdo;
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();
        //vamos pegar quantos registro tem com esse email e senha
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch(); // pegando um usuario só
            $_SESSION['idUser'] = $dado['id_usuario'];
            return true;
        } else {
            return false;
        }
    }
    // qual usuario está logado
    public function logged($id)
    {
        global $pdo;
        $array = array();
        $sql = "SELECT nome,email,profissao,imagem FROM usuarios WHERE id_usuario =:id_usuario";
        
        $sql = $pdo->prepare($sql);
        $sql->BindValue("id_usuario", $id);
        $sql->execute();


        //quantos registro tem dentro dessa consulta
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
}
?>