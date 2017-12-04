<?php
  include 'conecta.php';
  $conn= Conexao::conectar();
               
  if (!$conn) {
    die("Error: " . mysqli_connect_error());
  }

 $Titulo = $Numero_Edicao = $Editora = $Ano = $Data = $Idioma ="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $Titulo = $_POST["Titulo"];
      $Numero_Edicao = $_POST["Numero_Edicao"];
      $Editora = $_POST["Editora"];
      $Ano = $_POST["Ano"];
      $Data = $_POST["Data"];
      $Idioma = $_POST["Idioma"];
      $id= $_POST["id"];
  }


  $sql = "UPDATE Gibis SET  Titulo = ".$_POST["Titulo"].";
                                Numero_Edicao = ".$_POST["Numero_Edicao"].";
                                Editora = ".$_POST["Editora"].";
                                Ano = ".$_POST["Ano"].";
                                Data = ".$_POST["Data"].";
                                Idioma = ".$_POST["Idioma"].";                               
                                WHERE idGibi = '".$_POST["id"].'' "; 
  echo " ".$sql." ";
  if (mysqli_query($conn, $sql)) {
      echo "Record successfully updated";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>