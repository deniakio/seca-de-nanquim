<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="Acesso Restrito">
  <meta name="robots" content="noindex">
  <title>Acesso Restrito - Seca de Nanquim</title>
  <link rel="shortcut icon" href="img/tab_thumb.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

</head>

<body>
  <header>
        <h2>Mensagens de Contato Seca de Nanquim</h2>
    </header>
    <table class="tabela">
        <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>E-MAIL</th>
          <th>TIPO DE CONTATO</th>
          <th>MENSAGEM</th>
          <th>STATUS</th>
          <th>RESPONDER</th>
        </tr>
        <?php
            $email = $_SESSION['email'];
            include_once('conexao.php');
            echo "Usuário Logado: $email";
            $sql = "SELECT id,nome,email,tipodecontato,mensagem,situacao FROM ctt";
            $resultado = mysqli_query($conn, $sql) or die('Erro ao retornar dados');
            while($linha = mysqli_fetch_array($resultado)){
        ?>
                <tr>
                    <td><?php echo $linha['id']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['email']; ?></td>
                    <td><?php echo $linha['tipodecontato']; ?></td>
                    <td><?php echo $linha['mensagem']; ?></td>
                    <td><?php echo $linha['situacao']; ?></td>
                    <td><?php $linha['email']; ?></td>
                </tr>
        <?php
            }
            mysqli_close($conn);
        ?>
    </table>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="style.js"></script>

</body>

</html>