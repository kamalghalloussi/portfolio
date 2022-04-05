Skip to content
Product 
Team
Enterprise
Explore 
Marketplace
Pricing 
Search
Sign in
Sign up
michelonlineformapro
/
Email-Vrai-Serveur
Public
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
Email-Vrai-Serveur/tailwind_email/index.php /
@michelonlineformapro
michelonlineformapro Signed-off-by: michel michael <m.michel@onlineformapro.com>Qiwogames …
…
Latest commit d3a3dd2 on 24 Feb 2021
 History
 1 contributor
92 lines (72 sloc)  3.81 KB
   
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="output.css" rel="stylesheet">

</head>
<?php

//Recup des valeurs du formulaire
if(isset($_POST['object']) && isset($_POST['email']) && isset($_POST['message'])){

    $destinataire = "kamal.ghalloussi@gmail.com";
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    //Requete HTTP
    $to = $destinataire;
    $subject = $object;
    $headers = $email;

    $message.= "
     <!DOCTYPE html>
    <html lang='fr'>
    <head> 
    <meta http-equiv='Content-Type' content='text/html'>
    <meta charset='UTF-8'>
     <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'>
    <title>Complexité de la conception d'un email</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
    <table class='table table-striped' style='border: 2px solid green'; width='100%'>
        <h1 style='color:#ff0000' class='text-center text-info'>MESSAGE :</h1>
        <tr>
        <h2 style='color:#ff0000' class='text-center text-info'>Email de test :</h2>
            <td>Nom de expéditeur : '.$destinataire.'</td>
            <td>Objet du message : '.$object.'</td>
            <td>Message : '.$message.'</td>
            <td><a href='listeAmpoule.php'>Ampoule.com</a></td>
        </tr>
    </table>
</body>
</html>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    //Appel de la fonction mail PHP

    mail($to, $subject,$message,$headers);
    var_dump(mail($to, $subject,$message,$headers));
    $msg =  "<p class='bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'>Votre message a bien été envoyé ! Une réponse vous sera rapidement envoyé.</p>";
}else{
    $msg =  "<p class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative'>Erreur lors de l'envois de email, merci de vérifier les champs du formulaire !!!!!!!!</p>";
}

if (isset($msg)) {
    echo $msg;
}

?>
