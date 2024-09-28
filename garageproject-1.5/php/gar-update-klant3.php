<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>gar-update-klant3.php</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Database voor het auto bedrijf van meneer Ertan en zijn medewerkers">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ertans Garage | update Klant</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
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

<h1>garage update klant</h1>
<p>klantgegevens wijzigen in de tabel klant van de database garage</p>
<?php
    //klantgegevens uit het formulier halen
    $klantid = $_POST["klantidvak"];
    $klantnaam = $_POST["klantnaamvak"];
    $klantadres = $_POST["klantadresvak"];
    $klantpostcode = $_POST["klantpostcodevak"];
    $klantplaats = $_POST["klantplaatsvak"];

    //updaten klantgegevens
    require_once "gar-connect.php";

    $sql = $database->prepare("UPDATE klanten SET klantnaam = :klantnaam, klantadres = :klantadres, klantpostcode = :klantpostcode, klantplaats = :klantplaats WHERE klantid = :klantid");

    $sql->execute(["klantid" => $klantid, "klantnaam" => $klantnaam, "klantadres" => $klantadres, "klantpostcode" => $klantpostcode, "klantplaats" => $klantplaats]);

    echo "de klant is gewijzigd. <br/>";
    echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>

