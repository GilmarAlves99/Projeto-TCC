<?php
require_once "conexao/ConexaoPDO.php";



$conexao = ConexaoPDO::getInstance();
$consulta = "SELECT * FROM usuarios";
$stmt = $conexao->prepare($consulta);
$stmt->execute();
$usuarios = $stmt->fetchAll();
?>
<table style="border: 1px solid black;width:100%;height:300px;font-size:1.8rem;">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>EMAIL</td>
        <td>idade</td>
        <td>IMAGEM</td>
    </tr>

    <?php
    foreach ($usuarios as $registro => $usuarios) {
    ?>
        <tr>
            <td> <?php echo $usuarios["id"]; ?> </td>
            <td> <?php echo $usuarios["login"]; ?> </td>
            <td> <?php echo $usuarios["email"]; ?> </td>
            <td> <?php echo $usuarios["idade"]; ?> </td>
            <td> <?php echo $usuarios["imagem"]; ?> </td>
            
        <?php } ?>

</table>