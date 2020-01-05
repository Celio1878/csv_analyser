<?php
	session_start();
	include("conexao_graf.php");

	$conexao = mysqli_connect("localhost", "root", "", "import") or die ("Não foi possível conectar");
	$apagar_tabela = "TRUNCATE TABLE csv";
	$apagar = mysqli_query($conexao, $apagar_tabela);

	if ($apagar) {
		echo "<script>alert('Tabela limpa com sucesso');window.location='graf_tab.php'</script>";
	} else {
		echo "<script>alert('ERRO!!! Limpeza não efetuada');window.location='graf_tab.php'</script>";
	}
?>