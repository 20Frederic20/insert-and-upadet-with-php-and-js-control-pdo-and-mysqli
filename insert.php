<?php

$host='localhost';
$port='3306';
$dbname ='dalton';
$user='root';
$pwd='';

try{
    $newBD= new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user,$pwd);
    $newBD->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connecté";
}catch (PDOException $e) {
    die('Erreur: '.$e->getMessage());

}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['numero'], $_POST['nom'], $_POST['coefficient'])) {
        if(!empty($_POST['numero']) && !empty($_POST['nom']) && !empty($_POST['coeffcient'])) {
            $requete = $newBD->prepare("INSERT INTO users(numero, nom, coefficient) VALUES (:numero, :nom, :coefficient)");
            $requete->execute(array(
                ":numero" => $_POST['numero'], 
                ":nom" => $_POST['nom'], 
                ":coefficient" => $_POST['coefficient']
            ));
        }
    }
}

//header("Location: /devoir/index2.php");

?>