<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher la liste des utilisateurs</title>
</head>
<body>
    <h3>Liste des utilisateurs :</h3>
    <form action="" method="post">
    <?php
        //fichier de connexion à la BDD
        include 'connectBdd.php';
        //function requête SQL
        include 'function.php';
        afficherUtili($bdd);
    ?>