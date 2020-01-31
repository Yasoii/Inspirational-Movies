<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Image</title>
    <link rel="Inspiring Movies" href="movies.php">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
        <h1 class="heading">Inspirational Movies</h1>
        <h2 class="heading">Be inspired everyday!</h2>
        </header>

        <form action="postImage.php" method="post" enctype="multipart/form-data" class="upload-image-form">
            <div>
                <label>Upload Image: </label>
                <input type="file" name="newImage">
            </div>
        
            <div>
                <input type="submit" value="Upload" class="upload-button">
            </div>
        </form>
    </div>
</body>
</html>