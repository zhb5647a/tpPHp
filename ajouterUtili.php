<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter un utilisateur</title>
    
</head>

<body>
    
<?php
        //menu
        include 'menu.php';
    ?>

<form class="" action="" method="post" name="login">

<h1 class="box-title">Ajouter un Utilisateur</h1>
<p>Saisir votre Nom  :</p>
<input type="text" class="box-input" name="nom_util" placeholder="Nom d'utilisateur">
<p>Saisir votre prenom :</p>
<input type="text" class="box-input" name="prenom_util" placeholder="prenom d'utilisateur">
<p>Saisir votre Email :</p>
<input type="email" class="box-input" name="mail_util" placeholder="Email">
<p>Saisir votre Mot de passe :</p>
<input type="password" class="box-input" name="mdp_util" placeholder="Mot de passe">
<br>
<br>

<input type="submit" value="Envoyer " name="submit" class="box-button">
</form>

<?php 
// connxion a la BDD
include 'connectBdd.php';
// function requête sql
include 'function.php';
if(isset($_POST['nom_util'])AND isset($_POST['prenom_util']) AND isset($_POST['mail_util']) 
AND isset($_POST['mdp_util'])  AND
$_POST['nom_util'] != "" AND $_POST['prenom_util'] !="" AND $_POST['mail_util'] !="" 
AND $_POST['mdp_util'] !="" ){
    $nom = $_POST['nom_util'];
    $prenom = $_POST['prenom_util'];
    $email = $_POST['mail_util'];
    $mdp = $_POST['mdp_util'];
    
    
    insertUtilisateur($bdd,$nom,$prenom,$email,$mdp);
    echo "$nom à été ajouté en BDD";
}

else{
    echo '<p>Veuillez remplir les champs du  formulaire</p>';
}
?>

  



    
</body>
</html>