<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
    <title>Inscription P04</title>
</head>

<body>
    <section class="p1">
        <form action="enregistrement.php" method="post">
        <h3>Inscription <img src="images/simplon.png" width="100" height="100" alt=""></h3>
                    <div class="nom">
                    <label>Noms</label>
                        <input type="text" name="noms">
                    </div>
                    <div class="prenom">
                    <label>Prénoms</label>
                        <input type="text" name="prénoms">
                    </div>
                    <div class="uid">
                    <label>Date de naisance</label>
                        <input type="date" name="naissance">
                    </div>
                    <div>
                    <input type="submit" name="submit" value="Enregistrer">
                    </div>
        </form>
    </section>

   