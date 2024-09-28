<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto2.php</title>
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
<p class="center">Dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel van de database garage</p>
<?php
//klantif uit het formulier halen
$klanten_klantid = $_POST["klantidvak"];

//klantgegevens uit de tabel halen
require_once "gar-connect.php";

$autos = $database->prepare("SELECT klanten_klantid, autokenteken, automerk, autotype, autokmstand FROM autos WHERE klanten_klantid = :klanten_klantid");
$autos->execute(["klanten_klantid" => $klanten_klantid]);

//klantgegevens in een nieuw formulier laten zien
echo "<form action='gar-update-auto3.php' method='post'>";
    foreach($autos as $auto) {
        //klantid mag niet gewijzigd worden
        echo "klanten_klantid: " . $auto["klanten_klantid"];
        echo "<input type='hidden' name='klantidvak'";
        echo "value='" . $auto["klanten_klantid"] . " '><br/>";

        echo "autokenteken: <input type='text'";
        echo "name = 'autokentekenvak'";
        echo "value = '" .$auto["autokenteken"]. "'";
        echo "> <br/>";

        echo "automerk: <input type='text'";
        echo "name = 'automerkvak'";
        echo "value = '" .$auto["automerk"]. "'";
        echo "> <br/>";

        echo "autotype: <input type='text'";
        echo "name = 'autotypevak'";
        echo "value = '" .$auto["autotype"]. "'";
        echo "> <br/>";

        echo "autokmstand: <input type='text'";
        echo "name = 'autokmstandvak'";
        echo "value = '" .$auto["autokmstand"]. "'";
        echo "> <br/>";
    }
        echo "<input type='submit'>";
    echo "</form>";
    //er moet eigenlkij nog gecontroleerd worden op een bestaand klantid
    ?>
</body>
</html>