<?php
session_start();
if (isset($_SESSION['firstname']) || isset($_SESSION['lastname'])) {
    include('./accueil.php');
}elseif(empty($_POST['firstname']) || empty($_POST['lastname'])){
    echo "<p>tu n'es pas connecter</p>";
    echo '<p><a href="./index.php">connexion</a></p>';
}else{
    $_SESSION['lastname']=$_POST['lastname'];
    $_SESSION['firstname']=$_POST['firstname'];
    include('./accueil.php');
};



?>
