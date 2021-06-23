<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User</title>
</head>
<body>
    <p>Créez un formulaire avec les champs "nom" et "prénom".<br>
     À l'envoie du formulaire sur une autre page, Affichez les informations saisies.</p>

<?php

echo ' Bonjour '. $_POST['firstName'] . ' ' .$_POST['lastName'];


?>


</body>
</html>

