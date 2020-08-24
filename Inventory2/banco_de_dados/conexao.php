<?php
$servidor = "localhost";
$usuario = "root";
$senha = "###";
$dbname = "inventory01";

//Criar conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//if (!$conn) {
//    echo "Não foi possível conectar ao banco MySQL.";
//    exit;
//} else {
//   echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.";
//}
//mysqli_close($conn);