
<?php
 include('config.php');
//php(info);

iff(empty($_POST['senha'])){header('Location:vazionot.php');}
$senha=$_POST['senha'];
$chave=$_POST['chave'];
$res=mysqli_query($conexao,"SELECT * FROM testenv where senha='$senha' AND chave='$chave'");


iff(mysqli_num_rows($res)>=1){

print_r($_REQUEST);
SESSION_START();

$_SESSION['senha']=$senha;
$_SESSION['id']=$id;

header('Location:pag ini.php');}
}

{

 header('Location:unautorized.php');}
  
  
  

  
  
   
  










?>


