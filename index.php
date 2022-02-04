<?php 
include_once __DIR__ . "./db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Auto Usate</h1>
    <ul>
    <?php 
    foreach ($auto_usate as $car) {
    ?>
    <li>
        <div class="img">
            <img src="<?=$car["immagine"] ?>" alt="">    
        </div>
            <?php 
            foreach ($car as $key => $value) {
                if ($key !== "immagine" && $value !== "null" && $key !== "id") {
                    ?>
                <div><?= $key ?> : <?= $value ?></div>    
                <?php    
               }
                ?>
            <?php    
            }
            ?>
    </li>

    <?php    
    }
    ?>
    </ul>
</body>
</html>