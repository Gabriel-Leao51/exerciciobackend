<?php

$usuario = 'root';
$password = '';
$database = 'cadastro';
$host = 'localhost';

$conn = mysqli_connect($host, $usuario, $password, $database);
    if ($conn->error) {
        die("Falha ao conectar ao banco de dados: " . $conn->error);
    }
    else
        echo "Conectado ao Banco de Dados";