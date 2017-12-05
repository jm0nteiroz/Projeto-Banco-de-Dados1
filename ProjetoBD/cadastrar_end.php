<?php  
	
	include 'conecta.php';
	$conn= Conexao::conectar();

	if (!$conn) {
 	   die("Error: " . mysqli_connect_error());
	}
	echo "Connected Successfully";

	$ISBN = $Titulo = $Numero_Edicao = $Editora = $Ano = $Data = $Idioma ="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$ISBN = $_POST["ISBN"];
	 	$Titulo = $_POST["Titulo"];
		$Numero_Edicao = $_POST["Numero_Edicao"];
	  	$Editora = $_POST["Editora"];
	  	$Ano = $_POST["Ano"];
	  	$Data = $_POST["Data"];
	  	$Idioma = $_POST["Idioma"];
	}

	$sql = "INSERT INTO LIVRO (ISBN, Titulo, DataCompra)
			VALUES (
					'".$_POST["isbn"]."',
					'".$_POST["titulo"]."',
					'".$_POST["data"]."')";
	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "INSERT INTO EDICAO (ISBN, Edicao, Ano)
			VALUES (
					'".$_POST["isbn"]."',
					'".$_POST["numero_da_edicao"]."',
					'".$_POST["ano"]."')";
	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);

?>