<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'teste';


$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if($conexao->connect_errno){
echo "erro";}

else
{
echo "STATUS:conectado";
}
?>
<?php
 //includ('config.php');

//if(!isset($_POST['senha'])){
if(empty($_POST['senha'])){header('Location:vazionot.php');}
$senha=$_POST['senha'];
$chave=$_POST['chave'];
$res=mysqli_query($conexao,"SELECT * FROM testenv where senha='$senha' AND chave='$chave'");


if(mysqli_num_rows($res)>=1){

//echo($_REQUEST);
SESSION_START();

$_SESSION['senha']=$senha;
//$_SESSION['id']=$id;


if(isset($_SESSION['senha'])){
header("Location:pag ini.php");}

}

  header("Location:unautorized.php");
  
  
  
  
  
  
   
  










?>


