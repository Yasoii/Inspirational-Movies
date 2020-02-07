<?php 
    $files = scandir('images');
    $imageNames = array_slice($files, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inspirational Movies</title>
    <link rel="Inspirational-Movies" href="movies.php">
    <link href="movies.php" rel="Inspirational-Movies"> 

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <?php include('menu.php'); ?>
    <div class="container">
        <header>
            <h1 class="heading">Inspirational-Movies</h1>
        </header>

        <a class="upload-button" href="upload.php">Upload Image</a>

        <div class="gallery">
            <?php
                foreach ($imageNames as $imageName) {
                    echo "<img src=\"images/$imageName\" alt=\"Gallery Image\">";
                }
            ?>
        </div>
    </div>
</body>
</html>

