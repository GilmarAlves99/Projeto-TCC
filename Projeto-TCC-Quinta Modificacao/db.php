<?php



//EXIBE

$sql = mysqli_query($conexao, "SELECT usuarios FROM
imagem WHERE login = ".$login."");

$row = mysqli_fetch_array($sql,MYSQLI_ASSOC); 
$tipo = $row["tipo"]; 
$bytes = $row["foto"];


header("Content-type: ".$tipo."");

echo $bytes;

echo "<img src=”gera.php?id=".$login."”";

?>