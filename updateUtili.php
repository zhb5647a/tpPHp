<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
    
</head>

<body>

<form class="" action="" method="post" name="login">

<h1 class="box-title">Modifier un Utilisateur</h1>
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

<input type="submit" value="Modifier " name="submit" class="box-button">
</form>
<?php
        //fichier de connexion à la BDD
        include 'connectBdd.php';
        //function requête SQL
        include 'function.php';
        //test si $_GET['id'] existe
        if(isset($_GET['id']) AND $_GET['id'] !=''){
            //stocke $_GET['id'] dans une variable $value
            $value = $_GET['id'];
            //test le contenu des champs du formulaire
            if(isset($_POST['nom_util'])AND isset($_POST['prenom_util'])
             AND  isset($_POST['mail_util']) AND isset($_POST['mdp_util']) AND
                $_POST['nom_util'] != "" AND $_POST['prenom_util'] !=""
                 AND $_POST['mail_util'] !="" AND $_POST['mdp_util'] !="" ){
                //stocket dans des variables les super globales POST
                $nom = $_POST['nom_util'];
                $prenom = $_POST['prenom_util'];
                $email = $_POST['mail_util'];
                $mdp = $_POST['mdp_util'];
                //appele la méthode updateutili
                updateUtili($bdd,$nom,$prenom,$email,$mdp,$value);
                //afficher un message de confirmation
                echo "<p>$nom à été modifié en BDD</p>";
            }
            //test si les champs du formulaire ne sont pas remplis
            else{
                echo '<p>Veuillez remplir les champs du  formulaire</p>';
            }
        }
        //test si l'id n'existe pas 
        else{
            header('Location: afficherUtili.php?error');
        }
    ?>
</body>
</html>