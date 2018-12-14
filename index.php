<?php
$add1 = 3 + 4;
$add2 = 5 * 20;
$add3 = 45 / 5;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part1</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <p>3 + 4 = <span class="add1"><?= $add1; ?></span></p>
  <p>5 * 20 = <?= $add2; ?></p>
  <p>45 / 5 = <?= $add3; ?></p>
</body>
</html>
