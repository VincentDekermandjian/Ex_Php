<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<body>
  <header>
    <h1>Panier</h1>
  </header>
<nav>
  <ul>
    <a href="./home.php"><h4>Continuez vos achats</h4></a>
  </ul>
</nav>
<!-- <form method="POST" action="./controllers/reservationAction.php">
    <!-- <?php echo '<input name="nom" type="text" placeholder="Nom" value="'.$_SESSION['firstname'].'" required>'?>
    <?php echo '<input name="firstname" type="hidden" value="'.$_SESSION['firstname'].'" >'?>
    <?php echo '<input name="lastname" type="hidden" value="'.$_SESSION['lastname'].'">'?> -->
    <input name="resto" type="text" placeholder="Réservation" required>
    <input name="date" type="date" placeholder="YYYY/MM/DD" required>
    <input name="heure" type="time" placeholder="00:00" required>
    <input type="submit" value="ajouter">
</form> -->
  <footer></footer>
</body>
</html>