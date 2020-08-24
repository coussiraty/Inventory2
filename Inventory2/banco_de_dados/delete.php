<?php
include_once 'conexao.php';

$id_register = filter_input(INPUT_GET, 'id_register', FILTER_SANITIZE_NUMBER_INT);
$queryDelete = $conn->query("DELETE from db_cadastro WHERE id_register='$id_register'");

if (mysqli_affected_rows($conn) > 0) :
    $destino = header("Location:../search.php");
endif;