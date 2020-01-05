<?php
	session_start();
?>

<!DOCTYPE html>
	<html>
    
		<head>
			<meta charset = "UTF-8">

			<meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<title> Cadastre-se </title>
			
			<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
				integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">

			<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
				integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">
			
			<link rel="stylesheet" href="_css/style_cadastro.css">
			
			<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
				integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous">
			</script>
			
			<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
				integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin = "anonymous">
			</script>
		</head>

		<body>
			<button class="back"><a href="index.php"><img src="img/voltar.png" title="Voltar para Página de Login"></a></button>
			
			<main class = "container">
				<section class = "row justify-content-center">
					<div class = "col-md-auto">
						<h3 class = "title"> Cadastro </h3>
						<br/>
					
						<?php
							if (isset($_SESSION['status_cadastro'])):
						?>
					
						<div class="sucesso_cadastro">
							<p>Cadastro efetuado!</p>
							<p>Faça login informando o seu usuário e senha <a href="login.php">AQUI</a></p>
						</div>
					
						<?php
							endif;
							unset($_SESSION['status_cadastro']);
						?>
					
						<?php
							if (isset($_SESSION['usuario_existe'])):
						?>
					
						<div class="existe">
							<p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
						</div>
					
						<?php
							endif;
							unset($_SESSION['usuario_existe']);
						?>
					
						<div class = "form">
							<form action="cadastrar.php" method="POST">
								<div class = "form-group-row">
									<div class = "col-20">
										<input name="nome" id="usuario" type="text" class="form-control" placeholder="Nome" autofocus="">
									</div>
							
									<div class = "col-20">
										<input name="usuario" type="text" class="form-control" placeholder="Usuário">
									</div>
							
									<div class = "col-20">
										<input name="senha" class="form-control " type="password" placeholder="Senha">
									</div>

									<button type="submit" class="btn btn-success btn-lg" id = "cadastro"> Cadastrar </button>
								</div>
							</form>
						</div>
					</div>
				</section>
			</main>
		</body>

	</html>