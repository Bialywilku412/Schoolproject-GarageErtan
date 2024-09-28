<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto3.php</title>
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

<h1 class="center">garage update auto</h1>
<p class="center">klantgegevens wijzigen in de tabel klant van de database garage</p>
<?php
    //klantgegevens uit het formulier halen
    $klanten_klantid = $_POST["klantidvak"];
    $autokenteken = $_POST["autokentekenvak"];
    $automerk = $_POST["automerkvak"];
    $autotype = $_POST["autotypevak"];
    $autokmstand = $_POST["autokmstandvak"];

    //updaten klantgegevens
    require_once "gar-connect.php";

    $sql = $database->prepare("UPDATE autos SET autokenteken = :autokenteken, automerk = :automerk, autotype = :autotype, autokmstand = :autokmstand WHERE klanten_klantid = :klanten_klantid");

    $sql->execute(["klanten_klantid" => $klanten_klantid, "autokenteken" => $autokenteken, "automerk" => $automerk, "autotype" => $autotype, "autokmstand" => $autokmstand]);
?>

<div class="goBack-Btn">
    <h3>De klant is toegevoegd!</h3>
    <a href='gar-menu.php'> terug naar het menu </a>
</div>
</body>
</html>