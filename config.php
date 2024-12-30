
<?php
$dbHost = 'sql213.infinityfree.com';
$dbUsername = 'if0_37950266';
$dbPassword = '@ajpda170A';
$dbName = 'if0_37950266_teste';


$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if($conexao->connect_errno){
echo "erro";}

else
{
echo "STATUS:conectado";
}

