<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User3</title>
</head>
<body>
    <p>Créez un formulaire avec les champs "nom" et "prénom".<br>
     À l'envoie du formulaire sur une autre page, Affichez les informations saisies.
    Vérifiez la saisie. Empêchez l'inclusion de balises html.</p>

<?php


//$verifName = '/^[A-Z]{1}[a-z]+$/';

if(is_numeric($_POST['lastName']) || is_numeric($_POST['firstName'])){
    echo 'Veuillez saisir des lettres';
    }else{
    echo 'Bonjour '.' '. htmlspecialchars($_POST['firstName']) .' '. htmlspecialchars($_POST['lastName']);

}

?>



</body>
</html>
