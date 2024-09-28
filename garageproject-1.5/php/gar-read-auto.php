<?php
session_start();

if ($_SESSION['myrank'] == "monteurs" || $_SESSION['myrank'] == "directie" || $_SESSION['myrank'] == "admin" || $_SESSION['myrank'] == "planner") {
  echo "";
} else {
header("Location: gar-menu(rank).php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Database voor het auto bedrijf van meneer Ertan en zijn medewerkers">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>gar-read-auto.php</title>
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
  <h1>Garage auto read</h1>
</div>
<p>Dit zijn alle gegevens uit de tabel autos van de database garage</p>

<?php

    // tabel uitleezn en netjes afdrukken
    require_once 'gar-connect.php';

    $autos = $database->prepare ("select autokenteken, automerk, autotype, autokmstand, autokmstand, klanten_klantid FROM autos");
    $autos->execute();

    foreach($autos as $auto) {
      echo "<table class='table'>";
      echo "<tr>  <th scope='col'> Klant ID</th>";
      echo "<th scope='col'> Autokenteken</th>";
      echo "<th scope='col'> Automerk</th>";
      echo "<th scope='col'> Autotype</th>";
      echo "<th scope='col'> Autokmstand</th></tr>";
      echo "<td>" . $auto["klanten_klantid"] . "</td>" . "<br>";
      echo "<td>" . $auto["autokenteken"] . ", " . "</td>";
      echo "<td>" . $auto["automerk"] . "</td>";
      echo "<td>" . $auto["autotype"] . "</td>";
      echo "<td>" . $auto["autokmstand"] . "</td>";
      echo "<br>";
      echo "</table>";
    }


?>