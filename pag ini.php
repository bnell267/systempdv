
<?php
SESSION_START();
if(!isset($_SESSION['senha'])){

unset($_SESSION['senha']);
//unset($_SESSION['id']);

header('Location:not.php');}





 echo "pag ini";
 ?>