<?php
	session_start();
?>

<?php
	$conn = mysqli_connect("localhost", "root", "", "import");

	if (isset($_POST["import"])) {
		$fileName = $_FILES["file"]["tmp_name"];	
		if ($_FILES["file"]["size"] > 0) {
			$file = fopen($fileName, "r");
			while (($column = fgetcsv($file, 100000, ";")) !== FALSE) {
				$sqlInsert = "INSERT INTO csv (tempo,temperatura_1,temperatura_2,temperatura_3,temperatura_4,temperatura_5,temperatura_6,temperatura_7,temperatura_8,temperatura_9,temperatura_10,temperatura_11,temperatura_12)
				values ('" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "',
				'" . $column[6] . "','" . $column[7] . "','" . $column[8] . "','" . $column[9] . "','" . $column[10] . "','" . $column[11] . "',
				'" . $column[12] . "','" . $column[13] . "')";
				$result = mysqli_query($conn, $sqlInsert);
							
				if (! empty($result)) {
					$type = "success";
						$message = "Documento .csv inserido ao Banco de Dados";
				} else {
					$type = "error";
					$message = "ERRO! Documento não importado";
				}
			}
		}
	}
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

			<link rel="stylesheet" href="_css/style_graf_tab.css">

			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
				integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
			</script>
			
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
				integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
			</script>
						
			<script src="_js/le_doc.js"> </script>

			<script type="text/javascript" src="_js/jquery.min.js"></script>
		
			<script type="text/javascript" src="_js/Chart.min.js"></script>
    </head>

    <body>
			<button class="btn btn-warning" id = "sair"><a href="inf.php">Voltar para Página Inicial</a></button>
			<main class = "container-fluid">
        <div class="form" name="form">
          <?php
						error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
						
								$und = shell_exec ('.\entrada.py ' . $_SESSION['unidade']);
									print_r ("Unidade = ".$und."<br/>");
									echo "<br/>";
								$cln = shell_exec ('.\entrada.py ' . $_SESSION['clone']);
									print_r ("Clone = ".$cln."<br/>");
									echo "<br/>";
								$fon = shell_exec ('.\entrada.py ' . $_SESSION['forno']);
									print_r ("Forno = ".$fon."<br/>");
									echo "<br/>";
								$hum = shell_exec ('.\entrada.py ' . $_SESSION['hum_madeira']);
									print_r ("Humidade da Madeira = ".$hum. "%"."<br/>");
									echo "<br/>";
								$hua = shell_exec ('.\entrada.py ' . $_SESSION['hum_ar']);
									print_r ("Humidade do Ar = ".$hua. "%"."<br/>");
									echo "<br/>";
								$tam = shell_exec ('.\entrada.py ' . $_SESSION['temp_ambiente']);
									print_r ("Temperatura Ambiente = ".$tam. "°C"."<br/>");
									echo "<br/>";
								$diam = shell_exec ('.\entrada.py ' . $_SESSION['diametro']);
									print_r ("Diametro = ".$diam. " cm". "<br/>");
									echo "<br/>";
								$com = shell_exec ('.\entrada.py '. $_SESSION['comprimento']);
									print_r ("Comprimento = ".$com. " m"."<br/>");
									echo "<br/>";
								$vol = shell_exec ('.\entrada.py '. $_SESSION['volume']);
									print_r ("Volume = ". $vol. " m³");
          ?>
        </div>
   
				<div id="response" class= "">
					<?php
						if(!empty($type)) { 
							echo $type . " display-block";
						}
					?>
							
					<?php
						if(!empty($message)) {
							echo $message;
						}
					?>
				</div>
						
				<div class="tabela">
          <div class="linha">
            <form class="form-horizontal" action="" method="POST" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
              <div class="col-13">
                <input type="file" name="file" id="file" accept=".csv">
                <button type="submit" id="submit" name="import" class="btn btn-outline-success">Importe tabela</button>
              </div>
            </form>
          </div>
						
					<?php
            $sqlSelect = "SELECT * FROM csv";
            $result = mysqli_query($conn, $sqlSelect);
                    
            if (mysqli_num_rows($result) > 0) {
          ?>
						
					<table id='userTable'>
						
						<?php            
							while ($row = mysqli_fetch_array($result)) {
						?>
															
						<tbody>
							<tr>
								<td><?php  echo $row['tempo']; ?></td>
								<td><?php  echo $row['temperatura_1']; ?></td>
								<td><?php  echo $row['temperatura_2']; ?></td>
								<td><?php  echo $row['temperatura_3']; ?></td>
								<td><?php  echo $row['temperatura_4']; ?></td>
								<td><?php  echo $row['temperatura_5']; ?></td>
								<td><?php  echo $row['temperatura_6']; ?></td>
								<td><?php  echo $row['temperatura_7']; ?></td>
								<td><?php  echo $row['temperatura_8']; ?></td>
								<td><?php  echo $row['temperatura_9']; ?></td>
								<td><?php  echo $row['temperatura_10']; ?></td>
								<td><?php  echo $row['temperatura_11']; ?></td>
								<td><?php  echo $row['temperatura_12']; ?></td>
							</tr>
								
							<?php
								}
							?>
						
						</tbody>
          </table>
                
          <form class="apagar_tabela" action="delete.php" method="post" name="apagar_csv" id="apagar_csv">
            <div class="entrada-linha">
              <button type="onsubmit" id="submit" name="apagar" class="btn btn-danger"> Apagar Dados </button>
            </div>
          </form>

					<?php
						}
					?>
						
				</div>
        <div class="chart-container">
    			<canvas id="mycanvas"></canvas>
  			</div>
     
    		<script type="text/javascript">
      		$(document).ready(function() {
						$.ajax({
	  					url : "grafico_db.php",
	  					type : "GET",
							success : function(data){
							console.log(data);

							var tempo = [];
							var temperatura_1 = [];
							var temperatura_2 = [];
							var temperatura_3 = [];
							var temperatura_4 = [];
							var temperatura_5 = [];
							var temperatura_6 = [];
							var temperatura_7 = [];
							var temperatura_8 = [];
							var temperatura_9 = [];
							var temperatura_10 = [];
							var temperatura_11 = [];
							var temperatura_12 = [];
							
							for(var i in data) {
								tempo.push(data[i].tempo + "  horas");
								temperatura_1.push(data[i].temperatura_1);
								temperatura_2.push(data[i].temperatura_2);
								temperatura_3.push(data[i].temperatura_3);
								temperatura_4.push(data[i].temperatura_4);
								temperatura_5.push(data[i].temperatura_5);
								temperatura_6.push(data[i].temperatura_6);
								temperatura_7.push(data[i].temperatura_7);
								temperatura_8.push(data[i].temperatura_8);
								temperatura_9.push(data[i].temperatura_9);
								temperatura_10.push(data[i].temperatura_10);
								temperatura_11.push(data[i].temperatura_11);
								temperatura_12.push(data[i].temperatura_12);
							}
							
							var chartdata = {
								labels: tempo,
								datasets: [
									{
										label: "Temperatura 1",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "blue",
										borderColor: "blue",
										pointHoverBackgroundColor: "blue",
										pointHoverBorderColor: "blue",
										data: temperatura_1
									},
									{
										label: "Temperatura 2",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "black",
										borderColor: "black",
										pointHoverBackgroundColor: "black",
										pointHoverBorderColor: "black",
										data: temperatura_2
									},
									{
										label: "Temperatura 3",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "brown",
										borderColor: "brown",
										pointHoverBackgroundColor: "brown",
										pointHoverBorderColor: "brown",
										data: temperatura_3
									},
									{
										label: "Temperatura 4",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "darkgreen",
										borderColor: "darkgreen",
										pointHoverBackgroundColor: "darkgreen",
										pointHoverBorderColor: "darkgreen",
										data: temperatura_4
									},
									{
										label: "Temperatura 5",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "purple",
										borderColor: "purple",
										pointHoverBackgroundColor: "purple",
										pointHoverBorderColor: "purple",
										data: temperatura_5
									},
									{
										label: "Temperatura 6",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "red",
										borderColor: "red",
										pointHoverBackgroundColor: "red",
										pointHoverBorderColor: "red",
										data: temperatura_6
									},
									{
										label: "Temperatura 7",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "darkblue",
										borderColor: "darkblue",
										pointHoverBackgroundColor: "darkblue",
										pointHoverBorderColor: "darkblue",
										data: temperatura_7
									},
									{
										label: "Temperatura 8",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "white",
										borderColor: "white",
										pointHoverBackgroundColor: "white",
										pointHoverBorderColor: "white",
										data: temperatura_8
									},
									{
										label: "Temperatura 9",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "lightgreen",
										borderColor: "lightgreen",
										pointHoverBackgroundColor: "lightgreen",
										pointHoverBorderColor: "lightgreen",
										data: temperatura_9
									},
									{
										label: "Temperatura 10",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "lightblue",
										borderColor: "lightblue",
										pointHoverBackgroundColor: "lightblue",
										pointHoverBorderColor: "lightblue",
										data: temperatura_10
									},
									{
										label: "Temperatura 11",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "darkred",
										borderColor: "darkred",
										pointHoverBackgroundColor: "darkred",
										pointHoverBorderColor: "darkred",
										data: temperatura_11
									},
									{
										label: "Temperatura 12",
										fill: false,
										lineTension: 0.1,
										backgroundColor: "gray",
										borderColor: "gray",
										pointHoverBackgroundColor: "gray",
										pointHoverBorderColor: "gray",
										data: temperatura_12
									}]
								};
							
							var ctx = $("#mycanvas");
				
							var LineGraph = new Chart(ctx, {
								type: 'line',
								data: chartdata
							});
						},
						error : function(data) {
						}
					});
				});
    	</script>
    </main>
  </body>
</html>