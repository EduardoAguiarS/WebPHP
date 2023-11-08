<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date</title>
</head>
<body>
  <?php
    echo date("d/m/Y");
    echo "<br>";

    echo "February 16, 1996 is on a " . date("l", mktime(0, 0, 0, 2, 16, 1996));
  ?>
</body>
</html>