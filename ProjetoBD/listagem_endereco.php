<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>MyCollection</title>
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template -->
      <link href="css/business-casual.css" rel="stylesheet">
   </head>
   <body>
      <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">MyCollectio</div>
      <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block"></div>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
         <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav mx-auto">
                  <li class="nav-item active px-lg-4">
                     <a class="nav-link text-uppercase text-expanded" href="home_adm.html">Home
                     <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="nav-item px-lg-4">
                     <a class="nav-link text-uppercase text-expanded" href="gerenciar_cliente.html">Gerenciar Gibis</a>
                  </li>
                  <li class="nav-item px-lg-4">
                     <a class="nav-link text-uppercase text-expanded" href="listagem_endereco.php">Gerenciar Livros</a>
                  </li>
                  <li class="nav-item px-lg-4">
                     <a class="nav-link text-uppercase text-expanded" href="cadastro_end.html">Cadastrar Gibi</a>
                  </li>
                  <li class="nav-item px-lg-4">
                     <a class="nav-link text-uppercase text-expanded" href="cadastrar_produto.html">Cadastar Livro </a>
                  </li>
                 </ul>
            </div>
         </div>
      </nav>
      <div class="container">
         <!-- Pagination -->
            <?php  
               include 'conecta.php';
               $conn= Conexao::conectar();
               
               if (!$conn) {
            	   die("Error: " . mysqli_connect_error());
               }
               
               $sql = "SELECT * FROM Enderecos";
               $result = mysqli_query($conn, $sql);
         	?>
         	<div class="bg-faded p-4 my-4">
            	<?php 
                  if (!(mysqli_num_rows($result) == 0)) {
                         echo "<table class='table'>
                                 <tr>
                                    <td>Rua</td>
                                    <td>Bairro</td>
                                    <td>Numero</td>
                                    <td>Complemento</td>
                                    <td>Cidade</td>
                                    <td>Estado</td>
                                 </tr>";
                     	// output data of each row
                     	while($row = mysqli_fetch_assoc($result)) {
                           echo "
                                 <tr>
                                    <td>". $row["rua"]."</td>
                                    <td>".$row["bairro"]."</td>
                                    <td>".$row["numero"]."</td>
                                    <td>".$row["complemento"]."</td>
                                    <td>".$row["cidade"]."</td>
                                    <td>".$row["estado"]."</td>
                                    <td><a href='alterar_end.php?id=".$row['idEndereco']."'>Editar</a></td>
                                    <td><a href='deletar_end.php?id=".$row['idEndereco']."'>Remover</a></td>
                                 </tr>
                           ";
                        }
                        echo "</table>";
                  } else {
                    	 echo "0 results";
                  }
                  
                  mysqli_close($conn);
               ?>  
         </div>
      </div>
      <!-- /.container -->
      <footer class="bg-faded text-center py-5">
         <div class="container">
            <p class="m-0">Copyright &copy; MyCollection</p>
         </div>
      </footer>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
