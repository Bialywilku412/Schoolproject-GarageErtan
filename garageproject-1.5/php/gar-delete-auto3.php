<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gar-delete-auto3.php</title>
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

<div class="title">
  <h1>Auto auto</h1>
</div>

    <p>Op klant id gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden</p>
    <?php
    //gegevenes uit het formulier halen
    $klanten_klantid = $_POST["klantidvak"];
    $verwijderen = $_POST["verwijdervak"];
    //kantgegevens verwijderen
    if ($verwijderen = 1) {
        require_once "gar-connect.php";
        $sql = $database->prepare("DELETE FROM autos WHERE klanten_klantid = :klanten_klantid");
        $sql->execute(["klanten_klantid" => $klanten_klantid]);
        echo "De gegevens zijn verwijderd. <br>";
    } else {
        echo "De gegevens zijn niet verwijdered. <br>";
    }
    echo "<a href='gar-menu.php'>Terug naar het menu. </a>";
    ?>
</body>
</html>