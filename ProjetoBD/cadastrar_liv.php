<?php  
	
	include 'conecta.php';
	$conn= Conexao::conectar();

	if (!$conn) {
 	   die("Error: " . mysqli_connect_error());
	}
	echo "Connected Successfully";

	$Titulo = $Numero_Edicao = $Editora = $Ano = $Data = $Idioma ="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 	$Titulo = $_POST["Titulo"];
		$Numero_Edicao = $_POST["numero_da_edicao"];
	  	$Editora = $_POST["editora"];
	  	$Ano = $_POST["ano"];
	  	$Data = $_POST["data"];
	  	$Idioma = $_POST["idioma"];
	}


	$sql = "INSERT INTO Gibis (Titulo, Numero_Edicao, Editora, Ano, Data, Idioma)
			VALUES ('".$_POST["titulo"]."',
					'".$_POST["numero_da_edicao"]."',
					'".$_POST["editora"]."',
					'".$_POST["ano"]."',
					'".$_POST["data"]."',
					'".$_POST["idioma"]."')";
	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);

?>