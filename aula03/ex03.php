<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diretórios e arquivos</title>
</head>
<body>
  <?php
    $path = "../aula02";

    $dir = dir($path);

    while ($arq = $dir -> read()) {
      echo "<a href='".$path."/".$arq."'>".$arq."</a><br>";
    }

    $dir->close();

    $file = fopen("temp.txt", "w");

    fwrite($file, "Hello World");

    fclose($file);

    function hello() {
      echo "Hello World";
    }

    HeLlo();
  ?>
</body>
</html>