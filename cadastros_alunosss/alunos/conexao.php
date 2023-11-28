<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_de_alunos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("ConexÃ£o falhou: " . $conn->connect_error);
}
