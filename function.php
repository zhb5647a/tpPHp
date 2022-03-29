<?php
function insertUtilisateur($bdd,$nom,$prenom,$email,$mdp){
    try{
        $req = $bdd->prepare('INSERT INTO utilisateur(nom_util,prenom_util,mail_util,mdp_util) 
        VALUES(:nom_util, :prenom_util,:mail_util,:mdp_util)');
        $req->execute(array(
            'nom_util' => $nom,
            'prenom_util' =>$prenom,
            'mail_util' =>$email,
            'mdp_util' =>$mdp,
           
            ));
    }
    catch(Exception $e)
    {
    //affichage d'une exception en cas d’erreur
    die('Erreur : '.$e->getMessage());
    }
}
function afficherUtili($bdd){
    try{
        $req = $bdd->prepare('SELECT * FROM utilisateur');
        $req->execute();
        while ($data = $req->fetch()){
            echo '<p><input type="checkbox" 
            name="id_uti[]" value="'.$data['id_util'].'">
            '.$data['nom_util'].'</p>';
        }
    }
    catch(Exception $e)
    {
    //affichage d'une exception en cas d’erreur
    die('Erreur : '.$e->getMessage());
    }
}
function updateUtili($bdd,$nom,$prenom,$email,$mdp,$value){
    try{
        $req = $bdd->prepare('UPDATE utilisateur SET nom_util = :nom_util,
        prenom_util = :prenom_util, mail_util = :mail_util, mdp_util = :mdp_util WHERE id_util = :id_util');
        $req->execute(array(
            'id_util' => $value,
            'nom_util' => $nom,
            'prenom_util' =>$prenom,
            'mail_util' =>$email,
            'mdp_util' =>$mdp
            ));
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
?>