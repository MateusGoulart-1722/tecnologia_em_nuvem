<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <tittle>Formulário de contato</tittle>
</head>
<body>
  <h1>Fale conosco</h1>

  <form method="post" action="">
    <label for="nome">Nome:</label><br>
    <input type="text" name="nome" required><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" required><br>

      <label for="mensagem">Mensagem:</label><br>
    <input name="mensagem" id="mensagem" rows="5" required></textarea><br><br>

    <input type="submit value="enviar">
  </form>

  <?php
  if($SERVER["REQUEST_METHOD"] == "POST") {
    //coleta os dados do formulario
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    //Exibe ops dados (em uma aplicação real, você poderia salvar ou enviar por email)
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>"
    echo "<p><strong>Email</strong> $email</p>"
    echo "<p><strong>Mensagem</strong> $mensagem</p>"
  }
?>
</body>
?>
