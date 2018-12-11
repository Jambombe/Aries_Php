<?php

require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Controllers/UserController.php';
require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Lib/Constants.php';

    if (filter_input(INPUT_POST, 'Valider', FILTER_DEFAULT) !== NULL)
    {
        $username = filter_input(INPUT_POST, 'username');
        $psw = filter_input(INPUT_POST, 'psw');
        
        $userCtrl = new UserController();
        $reponse = $userCtrl->newAction($username, $psw);
        
        if ($reponse == INSERT_SUCCESS)
        {
            echo "<script>confirm(\"Nouvel utilisateur OK\");"
            . "document.location.href=\"../index.php\"</script>";
        } else {
            echo "<script>confirm(\"Erreur lors de la création du nouvel utilisateur\");"
            . "document.location.href=\"../index.php?action=addusr\"</script>";
        }
    }

?>