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
    <title>Inspirational-Movies</title>
   
</head>
<body>
    <div class="container">
        <header>
            <h1 class="heading">Your Weekly Inspirational Movies</h1>
            <h2 class="heading">Inspire us with your 7 favorite inspirational movies for this week!</h2>
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