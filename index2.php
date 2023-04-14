}
        # code...
    }
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <fieldset class="col-6 offset-3 ">
        <legend>GESTIONS DES DALTONS</legend>
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Numéro </label>
                <input type="number" class="form-control" name="numero" id="numero">
            </div>
            <div class="mb-3">
                <label class="form-label">Nom du Dalton</label>
                <input type="text" class="form-control" name="nom" id="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Coefficient intellectuel du Dalton</label>
                <input type="number" class="form-control" name="coefficient" id="coefficient">
            </div>
            <div class="row justify-content-between">
                <div class="col">
                    <input type="submit" value="Envoyer" name="envoyer" id="envoyer" class="btn btn-primary">
                </div>
                <div class="col">
                    <button class="btn btn-info" name="modifier">Modifier</button>
                </div>
                <div class="col">
                    <input type="reset" value="Annuler" class="btn btn-danger">
                </div>
            </div>
        </form>
    </fieldset>
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

    function insert(){
            if(isset($_POST['numero'], $_POST['nom'], $_POST['coefficient'])) {
                if(!empty($_POST['numero']) && !empty($_POST['nom']) && !empty($_POST['coeffcient'])) {
                    $newBD->exec("INSERT INTO users(numero, nom, coefficient) VALUES (". $_POST['numero'] . "," . $_POST['nom'] . "," . $_POST['coefficient'] . ")");
                }
            }
        header("Location: /devoir/index2.php");
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        insert();
    }

    ?>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
</body>
</html>