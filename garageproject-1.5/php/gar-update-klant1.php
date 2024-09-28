<?php
  session_start();

if ($_SESSION['myrank'] == "admin" || $_SESSION['myrank'] == "planners") {
  echo "";
} else {
header("Location: gar-menu(rank).php");
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>gar-update-klant1.php</title>
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

<h1 class="center">garage update klant </h1>
<p class="center">Dit formulier wordt gebruikt om klantgegevens te wijzigen</p>
<div class="container">
  <div class="wrapper">
    <h2>Update klant</h2>
    <form action="gar-update-klant2.php" method="post">
      <div class="input-box">
        <input type="text" name="klantidvak" placeholder="Klant ID hier" required>
      </div>
      <div class="input-box button">
        <input type="Submit">
      </div>
    </form>
  </div>
</div>


<?php
    // tabel uitleezn en netjes afdrukken
    require_once 'gar-connect.php'; 

    $klanten = $database->prepare ("select klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klanten");
    $klanten->execute(); 

    foreach($klanten as $klant) {
      echo "<table class='table'>";
      echo "<tr>  <th scope='col'> Klant ID</th>";
      echo "<th scope='col'> Klantnaam</th>";
      echo "<th scope='col'> Klantadres</th>";
      echo "<th scope='col'> Klantpostcode</th>";
      echo "<th scope='col'> Klantplaats</th></tr>";
      echo "<td>" . $klant["klantid"] . "</td>" . "<br>";
      echo "<td>" . $klant["klantnaam"] .  "</td>";
      echo "<td>" . $klant["klantadres"] . "</td>";
      echo "<td>" . $klant["klantpostcode"] . "</td>";
      echo "<td>" . $klant["klantplaats"] . "</td>";
      echo "<br>";
      echo "</table>";
    }
?>
</body>
</html>