<?php

    $error = "";
    function create_userid() {
      $length = rand(4,20);
      $number = "";
      for ($i = 0; $i < $length; $i++) {
        $new_rand = rand(0,9);
        $number = $number . $new_rand;
      }
      return $number;
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        require_once "gar-connect.php";
        $arr['userid'] = create_userid();
        $condition = true;
        while($condition) {
          $query = "select userid from users where userid = :userid limit 1";
          $stm = $database->prepare($query);
          if ($stm) {
              $check = $stm->execute($arr);
              if ($check) {
                  $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                  if (is_array($data) && count($data) > 0) {
                      $arr['userid'] = create_userid();
                      continue;
                  }
              }
          }
          $condition = false;
        }

        //save to databse
        $arr['name'] = $_POST['name'];
        $arr['email'] = $_POST['email'];
        $arr['password'] = hash('sha1', $_POST['password']);
        $arr['rank'] = "user";
        $query = "insert into users (userid,name,email,password,rank) values (:userid,:name,:email,:password,:rank)";
        $stm = $database->prepare($query);
        if ($stm) {
            $check = $stm->execute($arr);
            if (!$check) { 
                $error = "could not save to databse";
            }
            if ($error == "") {
                header("Location: login.php");
                die;
            }
        }
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Database voor het auto bedrijf van meneer Ertan en zijn medewerkers">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ertans Garage | Log In</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-color">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Log uit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Log in</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 
<h1 class="title">Sign Up Page</h1>

<?php
  if ($error != "") {
      echo $error . "<br><br>";
  }

?>

<div class="container">
  <div class="wrapper">
    <h2>Sign Up Here!</h2>
    <form method="post">
      <div class="input-box">
        <input type="text" name="name" placeholder="Name" required>
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div class="input-box button">
        <input type="submit" value="signup">
      </div>
    </form>
  </div>
</div>

</body>
</html>