<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Database voor het auto bedrijf van meneer Ertan en zijn medewerkers">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>Ertans Garage | Menu</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-color">
  <div class="container-fluid">
    <a class="navbar-brand" href="gar-menu.php">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Log uit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-color" href="login.php">Log in</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
<!-- Menu Title -->
<div class="title">
  <h1>Main Menu</h1>
</div>
<!-- Onjuiste Rank -->
<div class="title">
  <h1>Onjuiste Rank!</h1>
</div>


<!-- Menu List 1 -->
<div class="container">
<div class="klant">
  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action Myactive" aria-current="true">
    Klanten
  </a>
  <a href="gar-create-klant1.php" class="list-group-item list-group-item-action">Create</a>
  <a href="gar-read-klant.php" class="list-group-item list-group-item-action">Read</a>
  <a href="gar-search-klant1.php" class="list-group-item list-group-item-action">Zoeken op klantid</a>
  <a href="gar-update-klant1.php" class="list-group-item list-group-item-action">update</a>
  <a href="gar-delete-klant1.php" class="list-group-item list-group-item-action">delete</a>
  </div>
</div>
<!-- Menu List 2 -->
<div class="auto">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action Myactive" aria-current="true">
      Auto's
    </a>
    <a href="gar-create-auto1.php" class="list-group-item list-group-item-action">Create</a>
    <a href="gar-read-auto.php" class="list-group-item list-group-item-action">Read</a>
    <a href="gar-search-auto1.php" class="list-group-item list-group-item-action">Zoeken op klantid</a>
    <a href="gar-update-auto1.php" class="list-group-item list-group-item-action">update</a>
    <a href="gar-delete-auto1.php" class="list-group-item list-group-item-action">delete</a>
  </div>
</div>
</div>
</body>
</html>

