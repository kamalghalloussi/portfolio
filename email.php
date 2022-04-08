<?php
if(isset($_POST['objet']) && !empty($_POST['objet']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prénom']) && !empty($_POST['prénom']) && isset($_POST['téléphone']) && !empty($_POST['téléphone']) && isset($_POST['message']) && !empty($_POST['message'])){


    //Creer des variables
    $destinataire = "kamal.ghalloussi@gmail.com";
    $objet = $_POST['objet'];
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prénom = $_POST['prénom'];
    $téléphone = $_POST['téléphone'];
    $message = $_POST['message'];

    $to = $destinataire;
    $subject = $objet;
    $header = $email;
    $message = '
            Expediteur : '.$header.'
            Objet du mail : '.$subject.'
            Nom : '.$nom.'
            prénom: '.$prénom.'
            téléphone: '.$téléphone.'
            Message : '.$message.'
        ';

    //Fonction mail de php
    mail($to, $subject, $message, $header);

    header("Location: Réussi.html");
}else{
    header("Location: Echec.html");
}