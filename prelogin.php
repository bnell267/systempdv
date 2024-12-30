
<?php
 //include('config.php');
php(info);

if(empty($_POST['senha'])){header('Location:vazionot.php');}
$senha=$_POST['senha'];
$chave=$_POST['chave'];
$res=mysqli_query($conexao,"SELECT * FROM testenv where senha='$senha' AND chave='$chave'");


if(mysqli_num_rows($res)>=1){

echo($_REQUEST);
//SESSION_START();

//$_SESSION['senha']=$senha;
//$_SESSION['id']=$id;

header('Location:pag ini.php');}
}else

{

  header('Location:unautorized.php');}
  
  
  

  
  
   
  










?>


