<?php 

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'estudo_2');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('<h2>ERRO: IMPOSSIVEL SE CONECTAR AO BANCO</h3>');
