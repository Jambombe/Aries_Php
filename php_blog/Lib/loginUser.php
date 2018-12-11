<?php

require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Controllers/UserController.php';
require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Entity/User.php';
require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Lib/Constants.php';

    if (filter_input(INPUT_POST, 'Valider', FILTER_DEFAULT) !== NULL)
    {
        $username = filter_input(INPUT_POST, 'username');
        $psw = filter_input(INPUT_POST, 'psw');
        
        $user = new User();
        $user->setUsername($username);
        $user->setPsw($psw);
        
        $userCtrl = new UserController();
        $reponse = $userCtrl->verifyInfos($user);
        
        var_dump($reponse);
        
        if ($reponse)
        {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['userId'] = $userCtrl->getIdFromUsername($username);
            echo "<script>confirm(\"Vous êtes connécté\");"
            . "document.location.href=\"../index.php\"</script>";
        } else {
            echo "<script>confirm(\"Erreur lors de la connexion\");"
            . "document.location.href=\"../index.php?action=connect\"</script>";
        }
    }

?>