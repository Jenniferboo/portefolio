<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
    <div id="glob">
<?php include "nav.php";?>
<h1>Pour toute questions...</h1>
<?php
    # si on a un message
    if(isset($message)):
        # on l'affiche
    ?>
    <h4><?=$message?></h4>
    <?php
    endif;
    ?>
<form action="#" method="POST">
    <div id="nmpC">
        <label for="nom">Nom:</label>
        <input    type="text" name="nom" id="nom" placeholder="">
        <label for="Prénom">Prénom:</label>
        <input    type="text" name="prenom" id="prenom" placeholder="">
    </div>
    <div id="mailC">
        <label for="mail">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="">
        </div>
        <div id="messC">
        <label for="text">message:   
        </label>
        <textarea name="mess" id="mess" cols="30" rows="10">

        </textarea>
        </div>
        <input type="submit" value="Envoyer"> 
    </div>
    </form>
    </main>
    <?php include "foot.php"?>
    </div>
</body>
</html>