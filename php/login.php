<?php 
  include ('login.class.php');

	$classe = new Login();

	$classe->setUsrLogin($_POST['usrLogin']);
	$classe->setSenhaLogin($_POST['senhaLogin']);

	echo $classe -> getSenhaLogin();

?>