<?php
$dbHost = 'sql213.infinityfree.com';
$dbUsername = 'if0_37950266';
$dbPassword = 'ajpda170a';
$dbName = 'if0_37950266_teste';


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
if(empty($_GET['senha'])){header('Location:vazionot.php');}else{
$senha=$_GET['senha'];
$chave=$_GET['chave'];
$res=mysqli_query($conexao,"SELECT * FROM testenv where senha='$senha' AND chave='$chave'");}


if(mysqli_num_rows($res)>=1){

//echo($_REQUEST);
SESSION_START();

$_SESSION['senha']=$senha;}else
//$_SESSION['id']=$id;


if(isset($_SESSION['senha'])){
header("Location:pag ini.php");}else

{

  header("Location:unautorized.php");}
  
  
  
}  
  
  
   
  










?>


