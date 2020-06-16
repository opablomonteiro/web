<?php
require "ConnectionFactory.php";
//$conexao = new ConnectionFactory();
$conexao = ConnectionFactory::getconnection();
echo " - terminou";
?>