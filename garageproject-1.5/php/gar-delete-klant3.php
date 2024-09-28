<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gar-delete-klant2.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
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
<!-- Title name -->
<div class="title">
  <h1>Klant Verwijderen</h1>
</div>
    <p>Op klant id gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden</p>
    <?php
    //gegevenes uit het formulier halen
    $klantid = $_POST["klantidvak"];
    $verwijderen = $_POST["verwijdervak"];
    //kantgegevens verwijderen
    if ($verwijderen = 1) {
        require_once "gar-connect.php";
        $sql = $database->prepare("DELETE FROM klanten WHERE klantid = :klantid");
        $sql->execute(["klantid" => $klantid]);
    } else {
        echo "De gegevens zijn niet verwijdered. <br>";
    }
    ?>
    <div class="goBack-Btn">
      <h3>De Auto is verwijderd!</h3>
      <a href='gar-menu.php'> terug naar het menu </a>
    </div>
</body>
</html>