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
		$Numero_Edicao = $_POST["Numero_Edicao"];
	  	$Editora = $_POST["Editora"];
	  	$Ano = $_POST["Ano"];
	  	$Data = $_POST["Data"];
	  	$Idioma = $_POST["Idioma"];
	}


	$sql = "INSERT INTO Gibis (Titulo, Numero_Edicao, Editora, Ano, Data, Idioma)
			VALUES ('".$_POST["Titulo"]."',
					'".$_POST["	Numero_Edicao"]."',
					'".$_POST["Editora"]."',
					'".$_POST["Ano"]."',
					'".$_POST["Data"]."',
					'".$_POST["Idioma"]."')";
	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);

?>