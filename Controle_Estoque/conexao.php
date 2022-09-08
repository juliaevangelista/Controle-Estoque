<?php 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'controle_estoque');

$con = new PDO('mysql:host=' .HOST .';dbname' .DBNAME.';', USER, PASS);
echo "Conexão Sucesso";
?>