<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste vaga de estágio NET</title>
</head>
<body>
<h1 class='title'>Cadastro de Usuario</h1>
<?php
$nome = "";
$email = "";
$senha = "";
$confirmacao_senha = "";
 
$usuarios = [];
if(file_exists('usuarios.json')){
  $usuarios_json = file_get_contents('usuarios.json');
  if($usuarios_json){
    $usuarios = json_decode($usuarios_json, true);
  }
}

function validaNome($nome){
  if(empty($nome)){
    echo "<p class='err'>Nome vazio</p>";
    return false;
  }
  if(strlen($nome) < 3 || strlen($nome) > 50){
    echo "<p class='err'>Nome deve ter entre 3 e 50 caracteres</p>";
    return false;
  }
  return true;
}

function validaEmail($email){
  if(empty($email)){
    echo "<p class='err'>E-mail vazio</p>";
    return false;
  }
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<p class='err'>E-mail inválido</p>";
    return false;
  }
  return true;
}

function validaSenha($senha){
  if(empty($senha)){
    echo "<p class='err'>Senha vazia</p>";
    return false;
  }
  if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@!%*?&])[A-Za-z\d$@!%*?&]{8,}$/', $senha)){
    echo "<p class='err'>Senha deve ter no mínimo 8 caracteres, pelo menos uma letra maiúscula, uma letra minúscula, um número e um caractere especial</p>";
    return false;
  }
  return true;
}

function validaConfirmacaoSenha($senha, $confirmacao_senha){
  if(empty($confirmacao_senha)){
    echo "<p class='err'>Confirmação de senha vazia</p>";
    return false;
  }
  if($senha != $confirmacao_senha){
    echo "<p class='err'>Confirmação de senha não confere</p>";
    return false;
  }
  return true;
}

function validaEmailRepetido($email, $usuarios){
  foreach($usuarios as $usuario){
    if($usuario['email'] == $email){
      echo "<p class='err'>E-mail já cadastrado</p>";
      return false;
    }
  }
  return true;
}

if($_POST){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $confirmacao_senha = $_POST['confirmacao_senha'];
 
  if(validaNome($nome) && validaEmail($email) && validaSenha($senha) && validaConfirmacaoSenha($senha, $confirmacao_senha) && validaEmailRepetido($email, $usuarios)){
    $usuarios[] = ['nome' => $nome, 'email' => $email, 'senha' => $senha];
    file_put_contents('usuarios.json', json_encode($usuarios));
    echo "<p class='success'>Usuário cadastrado com sucesso</p>";
  }
}
?>

<form method="post">
  <label for="nome">Nome:</label>
  <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
  <br>
  <label for="email">E-mail:</label>
  <input type="text" name="email" id="email" value="<?php echo $email; ?>">
  <br>
  <label for="senha">Senha:</label>
  <input type="password" name="senha" id="senha" value="<?php echo $senha; ?>">
  <br>
  <label for="confirmacao_senha">Confirmação de senha:</label>
  <input type="password" name="confirmacao_senha" id="confirmacao_senha" value="<?php echo $confirmacao_senha; ?>">
  <br>
  <input type="submit" value="Cadastrar">
</form>


<?php
foreach ($usuarios as $usuario) {
  echo "<div class='card'>";
    echo "<h3>Nome: " . $usuario['nome'] . "</h3>";
    echo "<p>E-mail: " . $usuario['email'] . "</p>";
  echo "</div>";
}
?>

<!-- style -->
<style>
  /* reset */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  /* body */
  body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    background-color: #f4f4f4;
    padding: 20px;
  }

  .title {
    margin-bottom: 20px;
    text-transform: uppercase;
    text-align: center;
    font-size: 24px;
  }

  /* form */
  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
  }

  form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }


  form input[type="text"],
  form input[type="password"] {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
    width: 100%;
  }

  form input[type="submit"] {
    padding: 5px 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    background-color: #eee;
    cursor: pointer;
  }

  form input[type="submit"]:hover {
    background-color: #ddd;
  }

  .err {
    color: white;
    background-color: red;
    padding: 5px;
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold;
    display: block;
    border-radius: 5px;
  }

  .success {
    color: white;
    background-color: green;
    padding: 5px;
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold;
    display: block;
    border-radius: 5px;
  }

  .card {
    margin-top: 20px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 20px;
  }
</body>
</html>