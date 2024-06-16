<?php 
	include ('./conexao.php');
  	include ('./classes/login.class.php');

	$classeLog = new Login();

	$classeLog->setUsrLogin($_POST['usrLogin']);
	$classeLog->setSenhaLogin(hash("sha256", $_POST['senhaLogin']));

	$emailLog = $classeLog->getUsrLogin();
    $senha = $classeLog->getSenhaLogin();

	$entrar = $_POST['entrar']; // do botão ou input tipo botão

	if(isset($entrar)) {

		$verifica = mysqli_query($conn, "select * from login where usrLogin = '$emailLog' and senhaLogin = '$senha'") or die("Erro ao buscar no banco!");

		if (mysqli_num_rows($verifica) <= 0) {
			echo "
				<script language='javascript' type='text/javascript'>
				alert('Não foi possível fazer login! Usuário ou senha incorretos!');
				window.location.href='../pages/login.html'
				</script>
			";
			die();

		} else {
			session_start();
			
			$_SESSION['nome_usu_sessao'] = $emailLog;
			
			header("Location: ../pages/logado.php");

		}
	}
	// fechando a conexão
	mysqli_close($conn);
?>