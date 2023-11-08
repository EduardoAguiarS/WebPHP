<!DOCTYPE html>
<html lang="ptBR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If e Switch Case</title>
</head>
<body>
  <?php
  $mes = date("n");

  if ($mes == 1) {
    $mes = "Janeiro";
  } elseif ($mes == 2) {
    $mes = "Fevereiro";
  } elseif ($mes == 3) {
    $mes = "Março";
  } elseif ($mes == 4) {
    $mes = "Abril";
  } elseif ($mes == 5) {
    $mes = "Maio";
  } elseif ($mes == 6) {
    $mes = "Junho";
  } elseif ($mes == 7) {
    $mes = "Julho";
  } elseif ($mes == 8) {
    $mes = "Agosto";
  } elseif ($mes == 9) {
    $mes = "Setembro";
  } elseif ($mes == 10) {
    $mes = "Outubro";
  } elseif ($mes == 11) {
    $mes = "Novembro";
  } elseif ($mes == 12) {
    $mes = "Dezembro";
  } else {
    $mes = "Mês inválido";
  }
  
  switch ($mes) {
    case 1: $mes == "Janeiro"; break;
    case 2: $mes == "Fevereiro"; break;
    case 3: $mes == "Março"; break;
    case 4: $mes == "Abril"; break;
    case 5: $mes == "Maio"; break;
    case 6: $mes == "Junho"; break;
    case 7: $mes == "Julho"; break;
    case 8: $mes == "Agosto"; break;
    case 9: $mes == "Setembro"; break;
    case 10: $mes == "Outubro"; break;
    case 11: $mes == "Novembro"; break;
    case 12: $mes == "Dezembro"; break;

    default: $mes == "Mês inválido"; break;
  }

  echo "Estamos no mês de $mes";

  $i = 0;
  while ($i++ < 5) {
      if ($i == 3) 
      break;
      echo $i;
  }
  ?>
</body>
</html>