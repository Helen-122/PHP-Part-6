<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice4</title>
</head>
<body>
    
                <form method="post" action="index.php">
                    <select name="civilite">
                        <option>Mr</option>
                        <option>Mme</option>
                    </select>
                    <label>Nom</label>
                    <input type="text" name="lastName" placeholder="Votre nom" required>
                    <label>Prénom</label>
                    <input type="text" name="firstName" placeholder="Votre prénom" required>
                    <input type="submit" name="valider" value="Valider"/>
                </form>
              <?php
            $verifName = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
                if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civilite'])){
                    if(preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
                        echo 'Bonjour '. ' ' .  $_POST['civilite']. ' ' . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']);
                    }else{
                    echo ' Veuillez vérifier votre saisie';
                    }
                }else{
                    echo ' Veuillez vremplir les champs demandés';
                }
  ?>
</body>
</html>