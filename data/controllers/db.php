<?php
function getAllMarket(){
    $connec = new PDO('mysql:dbname=market','root','root');
    $request = $connec->prepare('SELECT * FROM market');
    $request->execute();
    return $request->fetchAll();
};

function market($nom, $images, $quantite, $prix){
    $connec = new PDO('mysql:dbname=market','root','root');
    $request = $connec->prepare("INSERT INTO market (nom, images, quantite, prix)
    VALUES (:nom, :images, :quantite, :prix);");
    $request->execute([
        ":nom" => $nom,
        ":images" => $images,
        ":quantite" => $quantite,
        ":prix" => $prix.":€",
    ]);
};
?>