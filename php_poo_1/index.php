<?php
    require_once('./lib/persan.class.php');
    require_once './lib/hibou.class.php';
?>

<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Page accueil</title>
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
    </head>
    <body>
        <?php            
//            $objChat = new Persan();
//            $iterator = $objChat->getInfosPersan()->getIterator();
//            
//            foreach ($iterator as $key => $value) {
//                echo $key . ' &rarr; ' . $value . '</br>';    
//            }
            
            
                     
            
        ?>
        <header>
            <nav id="menu">
<!--                <button onclick="">Hibou</button>
                <button onclick="">Persan</button>-->

                <a href="./lib/FicheHibou.php">Hibou</a>
                <a href="">Persan</a>
            </nav>
        </header>
        
        <div id="mainDiv">
            
        </div>
    </body>
</html>
