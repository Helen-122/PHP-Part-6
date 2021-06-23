<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice1</title>
</head>
<body>
    <p>Créez un formulaire avec les champs "nom" et "prénom".<br>
     À l'envoie du formulaire sur une autre page, Affichez les informations saisies.</p>



<form action="user.php" method="post">
 
<input type="text" name="lastName" placeholder="Nom">

<input type="text" name="firstName" placeholder="Prénom">
<button type="submit" value="Valider">Valider</button>
</form>



</body>
</html>