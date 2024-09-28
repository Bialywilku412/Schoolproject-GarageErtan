<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>gar-update-klant2.php</title>
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

<h1 class="center">garage update klant</h1>
<p class="center">Dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel van de database garage</p>
<?php
//klantif uit het formulier halen
$klantid = $_POST["klantidvak"];

//klantgegevens uit de tabel halen
require_once "gar-connect.php";

$klanten = $database->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klanten WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);

//klantgegevens in een nieuw formulier laten zien
echo "<form action='gar-update-klant3.php' method='post'>";
    foreach($klanten as $klant) {
        //klantid mag niet gewijzigd worden
        echo "klantid: " . $klant["klantid"];
        echo "<input type='hidden' name='klantidvak'";
        echo "value='" . $klant["klantid"] . " '><br/>";

        echo "klantnaam: <input type='text'";
        echo "name = 'klantnaamvak'";
        echo "value = '" .$klant["klantnaam"]. "'";
        echo "> <br/>";

        echo "klantadres: <input type='text'";
        echo "name = 'klantadresvak'";
        echo "value = '" .$klant["klantadres"]. "'";
        echo "> <br/>";

        echo "klantpostcode: <input type='text'";
        echo "name = 'klantpostcodevak'";
        echo "value = '" .$klant["klantpostcode"]. "'";
        echo "> <br/>";

        echo "klantplaats: <input type='text'";
        echo "name = 'klantplaatsvak'";
        echo "value = '" .$klant["klantplaats"]. "'";
        echo "> <br/>";
    }
        echo "<input type='submit'>";
    echo "</form>";
    //er moet eigenlkij nog gecontroleerd worden op een bestaand klantid
    ?>
</body>
</html>