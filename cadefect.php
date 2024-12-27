
<?php
print_r($_REQUEST);
?>
<?php
include_once('config.php');
//if(isset($_POST['submit'])){


if(empty($_POST['senha'])){header("Location:pre.php");}
$senha=$_POST['senha'];
$nome="ADMIN";
$chave="STATUSENABLED";
$result=mysqli_query($conexao,"SELECT * FROM testenv where senha='$senha'");
//while($dados=mysqli_fetch_assoc($result)){
if(mysqli_num_rows($result)<1){
mysqli_query($conexao,"INSERT INTO testenv (nome,chave,senha) VALUE ('$nome','$chave','$senha')");
echo "usuario cadastrado com sucesso";
echo "<br/>";
echo "<a class='cod'style='text-decoration:none;' href='cadlogin.php'>voltar ao cadastro<a/>";
}else
{echo "nao enviado cadastro existente";
echo "<br/>";
echo "<a class='cod'style='text-decoration:none;' href='cadlogin.php'>voltar ao cadastro<a/>";}

?>