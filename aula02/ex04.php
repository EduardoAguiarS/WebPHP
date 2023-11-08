<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Each</title>
</head>
<body>
  <?php
  $usuarios = array("João", "Maria", "José", "Pedro", "Ana", "Carlos");

  foreach ($usuarios as $chave => $valor) {
    echo "$chave: $valor <br>";
  }

  $user = array(
    array("id" => 1, "nome" => "João", "idade" => 20),
    array("id" => 2, "nome" => "Maria", "idade" => 30),
    array("id" => 3, "nome" => "José", "idade" => 40),
    array("id" => 4, "nome" => "Pedro", "idade" => 50),
    array("id" => 5, "nome" => "Ana", "idade" => 60),
  );

  foreach ($user as $chave => $valor) {
    echo "ID: " . $valor["id"] . "<br>";
    echo "Nome: " . $valor["nome"] . "<br>";
    echo "Idade: " . $valor["idade"] . "<br>";
    echo "<hr>";
  }

  foreach ($user as $user ) {
    echo "<p>";
      foreach ($user as $chave => $valor) {
        echo "$chave: $valor <br>";
      }
    echo "</p>";
  }
  ?>
</body>
</html>