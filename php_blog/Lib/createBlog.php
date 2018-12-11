<?php

require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Controllers/BlogController.php';
require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Lib/Constants.php';

    if (filter_input(INPUT_POST, 'Valider', FILTER_DEFAULT) !== NULL)
    {
        $title = filter_input(INPUT_POST, 'title');
        $ownerId = filter_input(INPUT_POST, 'ownerid');
        
        $blogCtrl = new BlogController();
        $reponse = $blogCtrl->newAction($title, $ownerId);
        
        if ($reponse == INSERT_SUCCESS)
        {
            echo "<script>confirm(\"Nouveau blog créé\");"
            . "document.location.href=\"../index.php\"</script>";
        } else {
            echo "<script>confirm(\"Erreur lors de la création du nouveau blog\");"
            . "document.location.href=\"../index.php?action=addblog\"</script>";
        }
    }

?>