
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
    <h1>RESERVATION</h1>
    <?php
    echo "<p>Bonjour,".$_SESSION['firstname']." ".$_SESSION['lastname']."!</p>";
    ?>
  </header>
<nav>
  <ul>
    <a href="./formulaire.php"><li>Reserver une activité</li></a>
    <?php echo '<a href="./deconnect.php"><li>Deconnexion</li></a>'; ?>
  </ul>
</nav>

<?php
    require_once('./controllers/db.php');
    $reservation = getAllReservation();
?>
  <table>
    <tr>
        <th>NOM</th>
        <th>RESERVATION</th>
        <th>DATE</th>
        <th>HEURE</th>
    </tr>
    <?php
    foreach ($reservation as $key => $value) {
        $tr = '<tr>';
        $tr .= '<td>'.$value['nom'].'</td>';
        $tr .= '<td>'.$value['resto'].'</td>';
        $tr .= '<td>'.$value['date'].'</td>';
        $tr .= '<td>'.$value['heure'].'</td>';
        $tr .= '</tr>'; 
        echo $tr;
    }
    ?>
  </table>
  <footer></footer>
</body>
</html>