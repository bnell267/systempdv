

<?php
include_once('config.php');

//if(!isset($_GET['senha'])){
if(empty($_POST['senha'])){header('Location:vazionot.php');}else{
$senha=$_POST['senha'];
$chave=$_POST['chave'];
$res=mysqli_query($conexao,"SELECT * FROM testenv where senha='$senha' AND chave='$chave'");


if(mysqli_num_rows($res)>=1){

echo($_REQUEST);
SESSION_START();

$_SESSION['senha']=$senha;
$_SESSION['id']=$id;


if(isset($_SESSION['senha'])){
header("Location:pag ini.php");}

}
else{

  header("Location:unautorized.php");}
  
  
  
  
  
  }
   
  




//else{
//header:(Location:index.php');
//echo 'usuario não encontrado';}





    

   
  













