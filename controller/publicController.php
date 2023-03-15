<?php
if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
      
        case 'tr':
            include "../view/travaux.php";
            break;
            case 'tuto':
                include "../view/tuto.php";
                break;
        case 'lien':
            include "../view/liens.php";
            break;
        case 'cv':
            include '../view/cv.php';
            break;
        case 'cont':
                
                # si il existe les variables POST = formulaire envoyé
if(isset($_POST['nom'],$_POST['prenom'], $_POST['email'], $_POST['mess'] )){
# traitement des champs contre injection SQL (Sécurité!)
$nom = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
$prenom = htmlspecialchars(strip_tags(trim($_POST['prenom'])),ENT_QUOTES);
$mail = filter_var(trim($_POST['email']),FILTER_VALIDATE_EMAIL);
$mess = htmlspecialchars(strip_tags(trim($_POST['mess'])),ENT_QUOTES); // on pourrait vérifier si c'est un mail valide ( filter_var voir la fonction sur php.net)

# débugage des champs traités
var_dump($nom,$prenom,$mail,$mess);

# si les champs sont bons (ici vide, donc une seule erreur générale)
if(!empty($nom)&&!empty($prenom)&&$mail==true&&!empty($mess)){
    
    # insertion partie SQL
    $sqlInsert = "INSERT INTO `contacts` (`nom`,`prenom`,`email`,`mess`) VALUES ('$nom','$prenom','$mail','$mess');";

    # requête avec try catch
    try{
        # requête
        mysqli_query($db,$sqlInsert);
        
        # si pas d'erreur création du texte
        $message ="Merci pour votre message!";

    }catch(Exception $e){


            $message = "Il y a eu un problème lors de l'envoie de votre message, veuillez réessayer, merci! 2";
        
        
    }


# sinon erreur
}else{
    # création de la variable $message
    $message = "Il y a eu un problème lors de l'envoie de votre message, veuillez réessayer, merci!";
}
}
include '../view/contact.php';
                break;
        case 'adm':
                include '../view/admin.php';
                break;
        
        default:
            include_once "../view/home.php";
    }
} else {
    include_once "../view/home.php";
};

