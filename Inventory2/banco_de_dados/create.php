<?php
session_start();
include_once("conexao.php");

$hostname = filter_input(INPUT_POST, 'hostname', FILTER_SANITIZE_STRING);
$patrimony = filter_input(INPUT_POST, 'patrimony', FILTER_SANITIZE_NUMBER_INT);
$model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
$version_windows = filter_input(INPUT_POST, 'version_windows', FILTER_SANITIZE_STRING);
$key_windows = filter_input(INPUT_POST, 'key_windows', FILTER_SANITIZE_STRING);
$version_office = filter_input(INPUT_POST, 'version_office', FILTER_SANITIZE_STRING);
$key_office = filter_input(INPUT_POST, 'key_office', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$others_softwares = filter_input(INPUT_POST, 'others_softwares', FILTER_SANITIZE_STRING);
$others_keys = filter_input(INPUT_POST, 'others_keys', FILTER_SANITIZE_STRING);

$sql = "INSERT into db_cadastro (hostname,patrimony,model,version_windows,key_windows,version_office,key_office,email,others_softwares,others_keys,created) VALUES 
('$hostname','$patrimony','$model','$version_windows','$key_windows','$version_office','$key_office','$email','$others_softwares'
,'$others_keys',NOW())";


if (mysqli_query($conn, $sql)) {
    $_SESSION['msg'] = "<p style ='color:blue';>New record created successfully!</p>";
    header("Location: ../register.php");
} else {
    $_SESSION['msg'] = "<p style ='color:red';>Not record!</p>";
    header("Location: ../register.php");
}