<?php

$dbHost = 'Localhost';
$dbUsername = '';
$dbPassword = '';
$dbName = 'Aqui vai o nome do banco de dados';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//if($conexao->connect_errno)
//{
 //   echo "erro";
//}

//else
//{
  //  echo " conexao efetuada com sucesso";
//}
?>