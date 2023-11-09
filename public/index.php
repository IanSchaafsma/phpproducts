<?php 
require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoL cards</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <ul class="cards">
        <li class="cards__card">
            <h2 class="cards__cardTitle"><?php echo getChampion($conn, "jax", "titel"); ?></h2>
            <p class="cards__cardDesc"><?php echo getChampion($conn, "jax", "desc"); ?></p>
            <a href="character.php?slug=<?php echo getChampion($conn, "jax", "slug") ?>" class="cards__cardLink">Klik hier</a>
        </li>
        <li class="cards__card">
            <h2 class="cards__cardTitle"><?php echo getChampion($conn, "fizz", "titel"); ?></h2>
            <p class="cards__cardDesc"><?php echo getChampion($conn, "fizz", "desc"); ?></p>
            <a href="character.php?slug=<?php echo getChampion($conn, "fizz", "slug") ?>" class="cards__cardLink">Klik hier</a>
        </li>
    </ul>
</body>
</html>
