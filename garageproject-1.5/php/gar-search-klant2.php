<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gar-search-klant2.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<!-- Title name -->
<div class="frozen-title">
  <h1>Search Klant</h1>
</div>

    
    <?php
    //klantid uit het formulier halen
    $klantid = $_POST["klantidvak"];
    //klantgegevens uit de tabel halen
    require_once "gar-connect.php";

    $klanten = $database->prepare ("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klanten WHERE klantid = :klantid");
    $klanten->execute([":klantid" => $klantid]);
    //klantgegevens laten zien
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
    echo "<div class='goBack-Btn'><br/>";
      echo "<h3>De klant is opgezocht!</h3>";
      echo "<a href='gar-menu.php'> terug naar het menu </a>";
    echo "</div>";
    ?>
</body>
</html>