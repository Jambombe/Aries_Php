<?php

    require_once 'hibou.class.php';
    require_once 'FicheOiseau.class.php';
    
    // Démarrage de session (ou reprise) avec debut du délai manger
    session_start();
    
    if (!isset($_SESSION['Hibou']))
    {
        $_SESSION['Hibou'] = time();
    }
/////////////////////////////////////
    
    // Creation du Hibou et de sa fiche
    $objHibou = new Hibou();
    $propHibou = $objHibou->getHibou();
    
    $ficheHibou = new FicheOiseau($objHibou, $propHibou);
    ///////////////////
    
    // Verifie si on nourri l'animal
    if (isset($_GET['manger']))
    {
        if ($_GET['manger'] == 1)
        {
            $objHibou->nourrir ();
            header('Location: FicheHibou.php');
        }
    }
    ///////////////////////////////    
?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo $propHibou['Race']; ?></title>
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
    
    </br>
    <input type="button" value="&larr; Retour" onclick="document.location.replace('../')">
    <br><br><br><br>
    <?php
        echo $ficheHibou->getFiche();
    ?>

</body>
</html>