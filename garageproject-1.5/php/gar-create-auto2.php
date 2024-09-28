<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Database voor het auto bedrijf van meneer Ertan en zijn medewerkers">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>gar-create-klant2.php</title>
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
<?php
$autokenteken = $_POST["autokenteken"];
$automerk = $_POST["automerk"];
$autotype = $_POST["autotype"];
$autokmstand = $_POST["autokmstand"];
$klanten_klantid = $_POST["klanten_klantid"];

include_once "gar-connect.php";
$sql = $database->prepare ("INSERT INTO autos (autokenteken, automerk, autotype, autokmstand, klanten_klantid) VALUES (:autokenteken, :automerk, :autotype, :autokmstand, :klanten_klantid)");
$sql->bindParam(':autokenteken', $autokenteken);
$sql->bindParam(':automerk', $automerk);
$sql->bindParam(':autotype', $autotype);
$sql->bindParam(':autokmstand', $autokmstand);
$sql->bindParam(':klanten_klantid', $klanten_klantid);
$sql->execute();
?>

.
    <div class="goBack-Btn">
        <h3>De auto is toegevoegd!</h3>
        <a href='gar-menu.php'> terug naar het menu </a>
    </div>

</body>
</html>