
<?php
include_once('config.php');





$result=mysqli_query($conexao,"SELECT * FROM testenv WHERE chave='statushabilited' ORDER BY id ASC");
$var=mysqli_fetch_assoc($result);{

?>
<form action="prelogin.php" method="GET">
<br/><input type="text" name="nome"value="ADMIN"readonly/>
<br/><input type="text" name="senha"value=""placeholder="SENHA"/>
<br/><input type="text" name="chave"value="STATUSENABLED"readonly/>
<input type="submit"/>

<form/>


<?php

}


?>