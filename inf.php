<?php
	session_start();
?>

<!DOCTYPE html>
    <html>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="Content-type" content="text/html" charset=iso-8859-1/>
						<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <title>Informações de Entrada</title>

						<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
							integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			
			
						<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
							integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

						<link rel="stylesheet" href="_css/style_inf.css">

						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
							integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
						</script>
			
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
							integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
						</script>
        </head>

        <body>
			<div class = "topo">
				<img src = "img/arcelormittal.png"> <br/>
				<button class = "btn btn-danger"><a href="index.php">Sair do Usuário</a></button>
			</div>

			<main class = "container">
				<section class="row justify-content-center">
					<div class = "col-md-auto">
						<h2>Olá, <?php echo $_SESSION['usuario'];?>!</h2> <br/>    
						<h3>Informe todos os Seguintes Valores </h3>
						<div class = "form">
							<form action="inf_tabela.php" method="POST">
								<div class = "form-group-row">
									<div class = "col-6">
										<label> Unidade </label>
										<br/>
										<input class = "form-control" id = "unidade" type="text" name="unidade" autofocus="" required>
										<small class="form-text text-muted">Não Utilize espaços.</small>
										<br/>
									</div>

									<div class = "col-4">
										<label> Número de Clone </label>
										<br/>
										<input class = "form-control" type="number" name="clone" required>
										<br/>
									</div>

									<div class = "col-4">
										<label> Número do Forno </label>
										<br/>
										<input class = "form-control" type="number" name="forno" required>
										<br/>
									</div>

									<div class = "col-4">
										<label> Humidade Madeira</label>
										<br/>
										<input class = "form-control" type="number" name="humidade_madeira" required>
										<small class="form-text text-muted">(%)</small>
										<br/>
									</div>
									
									<div class = "col-4"
										<label> Humidade do Ar</label>
										<br/>
										<input class = "form-control" type="number" name="humidade_ar" required>
										<small class="form-text text-muted">(%)</small>
										<br/>
									</div>

									<div class = "col-4">
										<label> Temperatura Ambiente</label>
										<br/>
										<input class = "form-control" type="number" name="temperatura_ambiente" required>
										<small class="form-text text-muted">(°C)</small>
										<br/>
									</div>

									<div class = "col-4">
										<label> Diâmetro</label>
										<br/>
										<input class = "form-control" type="number" name="diameter" required>
										<small class="form-text text-muted">Centímetros</small>
										<br/>
									</div>

									<div class = "col-4">
										<label> Comprimento</label>
										<br/>
										<input class = "form-control" type="number" name="size" required>
										<small class="form-text text-muted">Metros</small>
										<br/>
									</div>

									<div class = "col-4">
										<label> Volume </label>
										<br/>
										<input class = "form-control" type="number" name="volume" required>
										<small class="form-text text-muted">Metros Cúbicos (m³)</small>
										<br/>
									</div>

									<input class="btn btn-info btn-lg" type="submit" id = "insere" name="submit" value="Submit">
								</div>
							</form>
						</div>
					</section>
				</div>
			</main>
        </body>

    </html>