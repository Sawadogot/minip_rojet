<?php
$nom=$_POST['noms'];
$prenom=$_POST['prénoms'];
$naissance=$_POST['naissance'];

include('Connexion.php');
$requete="INSERT INTO `apprenants`(`Noms`, `Prénoms`, `Date de naissance`) VALUES ('$nom','$prenom', '$naissance')";
$query=mysqli_query($conn, $requete);
if(isset($query)){
    echo"<p>insertion réussi</p>";
}
else{
    echo"<p>erreur d'insertion </p>";
}
?>
