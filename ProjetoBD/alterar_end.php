<?php
  include 'conecta.php';
  $conn= Conexao::conectar();
               
  if (!$conn) {
    die("Error: " . mysqli_connect_error());
  }

  if($_GET['id']) {
    $id = $_GET['id'];
  }
    $sql = "SELECT * FROM Enderecos WHERE idEndereco = ".$id." ";
    $result = $conn->query($sql);
 
    $data = mysqli_fetch_assoc($result);
    $conn->close();

?>

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

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">MyCollection</div>
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
              <a class="nav-link text-uppercase text-expanded" href="gerenciar_cliente.html">Gerenciar Clientes</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="listagem_endereco.php">Gerenciar Endereços</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="gerenciar_pedidos.html">Gerenciar Pedidos</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="cadastro_end.html">Cadastrar Endereço</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="cadastrar_produto.html">Cadastar Produto</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="gerenciar_cardapio.html">Gerenciar Cardapio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <!-- Pagination -->
    <div class="bg-faded p-4 my-4">
        <ul class="pagination justify-content-center mb-0">
            <li class="page-item">
                <form action = "atualizar_end.php" method ="post">
                    <table cellspacing=2 cellpadding=6>
                        <tr>
                            <td class="text-heading">ID:</td>
                            <td><input type="text" name="id" size="40" class="form-control" required value="<?php echo $data['idEndereco'] ?>" readonly></td>
                        </tr>
                        <tr>
                            <td class="text-heading">Rua:</td>
                            <td><input type="text" name="rua" size="40" class="form-control" required value="<?php echo $data['rua'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-heading">Bairro:</td>
                            <td><input type="text" name="bairro" size="40" class="form-control" required value="<?php echo $data['bairro'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-heading">Numero:</td> 
                            <td><input type="text" name="numero" size="40" class="form-control" required value="<?php echo $data['numero'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-heading">Complemento:</td>
                            <td><input type="text" name="complemento" size="40" class="form-control" required value="<?php echo $data['complemento'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-heading">Cidade:</td>
                            <td><input type="text" name="cidade" size="40" class="form-control" required value="<?php echo $data['cidade'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-heading">Estado:</td>
                            <td><input type="text" name="estado" size="40" class="form-control" required value="<?php echo $data['estado'] ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <input type="submit" value="Atualizar" class="btn btn-secondary">
                            </td>
                        </tr>
                    </table>
                </form>
            </li>
        </ul>
    </div>
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