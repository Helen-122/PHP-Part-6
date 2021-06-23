<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User2</title>
</head>
<body>
    <p>Créez un formulaire avec les champs "nom" et "prénom".<br>
     À l'envoie du formulaire sur une autre page, Affichez les informations saisies.
    Vérifiez la saisie.</p>

<?php

$verifName = '/^[A-Z]{1}[a-z]+$/';
if(preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
    echo 'Bonjour '.' '.$_POST['firstName'] .' '.$_POST['lastName'];
}else{
    echo 'Veuillez remplir les champs';
}

/*

@$nom=$_POST["formLastName"];
@$prenom=$_POST["formFirstName"];
@$valider=$_POST["submit"];


      if(empty($formLastName)) && (empty($formFirstName)){
         echo 'Veuillez remplir les champs';
 }
 

    if(empty($_POST['formLastName']) && empty($_POST['formFirstName'])){
         
        echo "Vous devez saisir tous les champs";
    }if(){

    }
*/

?>


</body>
</html>


