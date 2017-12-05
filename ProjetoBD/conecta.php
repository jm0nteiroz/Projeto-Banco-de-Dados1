<?php

class Conexao
{
	 public static $servername = "localhost:3306";
	 public static $username = "root";
	 public static $password = "";
	 public static $db = "mydb";
	

	function desconecta()
	{
	mysqli_close($conn);
	}
	public static function conectar()
	{
		// Create connection
	$conn = mysqli_connect(Conexao::$servername, Conexao::$username, Conexao::$password, Conexao::$db);

	// Check connection
	if (!$conn) {
 	   die("Error:" . mysqli_connect_error());
	}
	// echo "Connected Successfully<br>";
	return $conn;	
	}

}

?>