<?php

$servername = "localhost"; //padrao- servidor local
$database = "crudphp"; //aqui vai o nome do banco de dados
$username = "root"; //padrao-root
$password = "marcelo123"; //padrao- senha banco de dados

//create conection

$conexao = mysqli_connect($servername, $username, $password, $database);
