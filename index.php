<?php

	session_start();

?>

<!DOCTYPE html>
	<html lang="pt-BR">

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<title>Sistema de Login</title>

			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
				integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			
			
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
				integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

			<link rel="stylesheet" href="_css/style_index.css">

			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
				integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
			</script>
			
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
				integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
			</script>
		</head>

		<body>
			<main class="container">
				<section class="row justify-content-center">
					<div class="col-md-auto">
						<h1 class="title">Login</h1>
						<br/>

						<figure class="box">
							<a href="http://brasil.arcelormittal.com/"><img src="img/arcelormittal.png" title="Acesse brasil.arcelormittal.com"></a>
						</figure>

						<?php
							if(isset($_SESSION['nao_autenticado'])):
						?>
						
						<div class="invalido">
							<p>ERRO: Usuário ou senha inválidos.</p>
						</div>
						
						<?php
							endif;
							unset($_SESSION['nao_autenticado']);
						?>
                    
						<div class="form">
							<form action="login.php" method="POST">
								<div class="form-row">
									<div class="col-8">
										<input name="usuario" name="usuario" class="form-control" placeholder="Insira seu usuário" autofocus="">
									</div>
									<div class="col-8">
										<input name="senha" class="form-control" type="password" placeholder="Insira sua senha">
									</div>
								</div>

									<button type="submit" class="btn btn-outline-success btn-lg" id="entrar">Entrar</button>
							</form>

							<form action="cadastro.php" method="POST">
								<button class="btn btn-outline-warning btn-lg" type="submit" id="novo">Novo Cadastro</button>
							</form>
						</div>
					</div>
				</section>
			</main>
		</body>

	</html>