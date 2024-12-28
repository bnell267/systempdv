<html>
<?php
SESSION_START();
if(!isset($_SESSION['chave'])){

unset($_SESSION['chave']);

header('Location:naoautorized.php');}

?>



<h2>Cadastro de Clientes<h2/>
<form action="cadefect.php" name="testenv" method="post">
<br/><input type="text" name="senha" placeholder="adicionar nova senha"/>
<!--<br/><input type="text" name="senha" placeholder="adicionar nova senha"/>-->
<input type="submit"/>
<form/>
  <!--<a href="enable.php"style="text-decoration:none;color:red;margin-left:270;margin-top:-21;"><h6 style="text-decoration:none;text-color:red;margin-left:270;margin-top:-21;">habilitar cliente<h6/><a/>
     <a href="desable.php"style="text-decoration:none;color:red;margin-left:270;margin-top:-21;"><h6 style="text-decoration:none;text-color:red;margin-left:270;margin-top:-21;">desabilitar cliente<h6/><a/>-->






<br/>

               CLIENTES HABILITADOS
<!--<table>
<th scope="col" style="padding:09;">ID<th/>
<th scope="col" style="padding:09;">CLIENTE<th/>
<th scope="col" style="padding:09;">CHAVE<th/>-->

<?php
include_once("config.php");
$result=mysqli_query($conexao,"SELECT * FROM testenv where chave='STATUSENABLED' ORDER BY id ASC");
while($user_data=mysqli_fetch_assoc($result)){
//$var=$user_data['id'];

echo '<table method="get">';
echo '<tbody>';
echo '<tr>';
echo '<td style="padding:10;">'.$user_data['id'].'<td/>';
echo '<td style="padding:10;">'.$user_data['nome'].'<td/>';
echo '<td style="padding:10;">'.$user_data['chave'].'<td/>';
echo '<td style="padding:10;">'.$user_data['senha'].'<td/>';
?>
<td><a href="editd.php?id=<?php echo $user_data['id']?>"style="color:red;text-decoration:none;"><h10>desabilitar<h10/><a/>

<td/>


<?php
echo '<tr/>';
echo '<tbody/>';
echo '<table/>';?>

<?php
}


?>
















<br/>
<!--<table>
<th scope="col" style="padding:09;">ID<th/>
<th scope="col" style="padding:09;">CLIENTE<th/>
<th scope="col" style="padding:09;">CHAVE<th/>-->
                      CLIENTES DESABILITADOS
<?php
include_once("config.php");
$result=mysqli_query($conexao,"SELECT * FROM testenv where chave='STATUSDISABLED' ORDER BY id ASC");
while($user_data=mysqli_fetch_assoc($result)){
//$var=$user_data['id'];

echo '<table method="post">';
echo '<tbody>';
echo '<tr>';
echo '<td style="padding:10;">'.$user_data['id'].'<td/>';
echo '<td style="padding:10;">'.$user_data['nome'].'<td/>';
echo '<td style="padding:10;">'.$user_data['senha'].'<td/>';
echo '<td style="padding:10;">'.$user_data['chave'].'<td/>';
?>
<td><a href="edith.php?id=<?php echo $user_data['id']?>"style="color:green;text-decoration:none;"><h10>habilitar<h10/><a/>

<td/>


<?php
echo '<tr/>';
echo '<tbody/>';
echo '<table/>' ;
?>
<?php
}
?>
</html>
