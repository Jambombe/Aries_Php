<?php

    session_start();

    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Controllers/UserController.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Repository/UserRepository.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Controllers/BlogController.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Repository/BlogRepository.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/vendor/autoload.php';
//    require_once 'Lib/Connexion.php';

    if (filter_input(INPUT_GET, 'action', FILTER_DEFAULT) !== NULL)
    {
        $action = filter_input(INPUT_GET, 'action');
        
        switch ($action)
        {
            case 'addusr':
                $list = array(array(""), 'Users/newUser.html');
                break;
            
            case 'allusrs':
                $userCtrl = new UserController();
                $list = $userCtrl->listAction();
                break;
            
            case 'addblog':
                $list = array(array(""), 'Blogs/newBlog.html');
                break;
            
            case 'allblogs':
                $blogCtrl = new BlogController();
                $list = $blogCtrl->listAction();
                break;
            
            case 'blog':
                $blogCtrl = new BlogController();
                $list = $blogCtrl->oneBlog(filter_input(INPUT_GET, 'id'));
                break;
            
            case 'connect':
                $list = array(array(""), 'connexion.html');
                break;
            
            case 'disconnect':
                session_destroy();
                $list = array(array(""), 'default.html');
                header('Location: index.php');
                break;
            
            case 'myblogs':
                $blogCtrl = new BlogController();
                $list = $blogCtrl->getBlogsByUserId();
                break;
            
            default;
                $list = array(array(""), 'default.html');
                break;
                
        }
    } else {
        $list = array(array(""), 'default.html');
    }

    
    /*
    * On positionne l'initialisation du twig en dernier parce que 
    * le paramètre $list qui nous donne le template arrive en dernier
    */
   {
        if ( isset($_SESSION['login']) && $_SESSION['login'])
        {
            $listMenu = array(array(""), "menuLogin.html");
            
        } else {            
            $listMenu = array(array(""), "menuLogout.html");
        }
//        $list = array(array(""), 'default.html');
        $loader = new Twig_Loader_Filesystem('Views/');
        $twig = new Twig_Environment($loader, array(
            'cache' => 'Cache',
            'debug' => true,
        ));
        $twig->addExtension(new Twig_Extension_Debug());
        $template = $twig->load($list[1]);
        $templateMenu = $twig->load($listMenu[1]);
   }
?>

<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
    </body>
</html>-->

<!doctype html>
<html lang="fr">
  <head>
      <link rel='icon' type="image/png" href="https://png.pngtree.com/png_detail/18/09/10/pngtree-the-sun-rain-cloud-icon-png-clipart_276532.jpg"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/style.css">
    
    <title>Blog Ciel</title>
  </head>
  <body>    
        
<!--        <nav>
            <a href="index.php?action=addusr">Nouvel utilisateur</a>
            <a href="index.php?action=allusrs">Tous les utilisateurs</a> </br>
            <a href="index.php?action=addblog">Nouveau blog</a>
        </nav>-->
        <?php
                
            echo $templateMenu->render($listMenu[0]);  
            echo $template->render($list[0]);            

        ?>
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
