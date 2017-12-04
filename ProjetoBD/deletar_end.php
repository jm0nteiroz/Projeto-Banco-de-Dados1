<?php
  include 'conecta.php';
  $conn= Conexao::conectar();
               
  if (!$conn) {
    die("Error: " . mysqli_connect_error());
  }

  $id="";

  if($_GET['id']) {
    $id = $_GET['id'];
  }

  $sql = "DELETE FROM Enderecos WHERE idEndereco = '".$id."'";
  echo " ".$sql." ";
  
  if (mysqli_query($conn, $sql)) {
      echo "Record successfully deleted";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>