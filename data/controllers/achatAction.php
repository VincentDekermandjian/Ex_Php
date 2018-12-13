<?php
  session_start();
  require_once('./db.php');
  market($_POST['nom'],$_POST['images'],$_POST['quantite'],$_POST['prix']);
  header('Location: /home.php');die;