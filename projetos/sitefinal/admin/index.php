<?php
	session_start();
	
	include("../lib/conexao.php");
	
	//
	$erro_login = "";
	if (isset($_POST['inputEmail']))
		{
			$email = $_POST['inputEmail'];
			$senha = $_POST['inputSenha'];
			
			$query = "	SELECT * FROM usuario
						WHERE (email='$email') && (senha='$senha')";
			$resultado = mysql_query($query,$conexao);
			
			$num_linhas = mysql_num_rows($resultado);
			
			if ($num_linhas>0)
			{
				$_SESSION['conectado']=true;
				
				header("location: home.php");
			}
			else
			{
				$_SESSION['conectado']=false;
				
				$erro_login = "<script>alert('Login ou Senha Inválidos!')</script>";
			}
		}
		if (isset($_GET["sair"]))
		{
			$_SESSION['conectado']=false;
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="login.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
	<?php echo $erro_login; ?>
	
    <div class="container">

	
		<form action="index.php" class="form-signin" method="post">
			<h2 class="form-signin-heading">Administrador</h2>
			<label for="inputEmail" class="sr-only">E-mail</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
			<label for="inputSenha" class="sr-only">Senha</label>
			<input type="password" id="inputSenha" name="inputSenha" class="form-control" placeholder="Senha" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		</form>

    </div> 
	
	<!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
