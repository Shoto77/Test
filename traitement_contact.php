<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index2.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index2</title>
</head>
<body>
    
<header>
    <a href="index2.php">Accueil</a>
    <a href="contact.php">Nous contacter</a>
    <a href="inscription.php">Inscription</a>
</header>

<div class="rectangle">
        <div class="titre">Confirmation</div>
        <div class="texte2">
            Message envoyé
        </div>
    </div>
    <?php
if (isset($_POST['nom']) && isset($_POST['email'])) {

    $nom = $_POST['nom'];
    $email = $_POST['email'];

  
    header("traitement_inscription.php");
    exit(); 
} else {
    echo "Tous les champs doivent être remplis.";
}
?>
</body>
</html>