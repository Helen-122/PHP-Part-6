<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice3</title>
</head>
<body>
    <p>Créez un formulaire avec les champs "civilité", "nom" et "prénom".<br>
     À l'envoie du formulaire sur une autre page, Affichez les informations saisies.<br> 
     Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'inclusion de balises html.</p>


<form action="user-3.php" method="post">
 <select name="civilite" id="">
 <option value="Mme">Mme</option>
  <option value="Mme">M.</option>
  </select>
  <label for="lastName">Nom: </label>
<input type="text" name="lastName" id="lastName" required>
<label for="firstName">Prénom</label>
<input type="text" name="firstName" id="firstName" required>
<button type="submit" name="submit" value="Valider">Valider</button>
</form>

</body>
</html>