<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="Inspiring Movies" href="movies.php">
<link href="movies.php" rel="Inspiring Movies">

<style>
body, html {
  height: 100%;
  margin: 0;
}
.bg {
  /* The image used */
  background-image: url("https://i.ytimg.com/vi/SSqgaFE9igo/maxresdefault.jpg");
  /* Full height */
  height: 100%; 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Inspiring Movies</a>
      <a href="#">Inspiring Music</a>
      <a href="#">Inspiring Books</a>
      <a href="#">Inspiring Phrases</a>
      
    </div>
  </div>
</div>

</head>
<body>

<?php include('menu.php'); ?>
<div class="bg"></div>