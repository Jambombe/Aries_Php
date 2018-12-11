<?php

    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Entity/Article.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Repository/ArticleRepository.php';

    class ArticleController
    {
        
        public function newAction($title, $content, $parentBlogId)
        {                        
            $newArt = new Article();            
            $newArt->setTitle($title);
            $newArt->setContent($content);
            date_default_timezone_set('Europe/Paris');
            $newArt->setArtDate(date("d/m/Y G:i"));
            $newArt->setId($parentBlogId);
            
            $artRepo = new ArticleRepository();
            $artRepo->setArtData($newArt);
            
            return $artRepo->insertDb();
        }
        
        public function getArticlesByBlogId($blogId)
        {
            $artRepo = new ArticleRepository();
            return array(array('articles'=>$artRepo->getArticlesByBlogId($blogId)), 'Articles/artFromBlogs.html');
        }
        
    }
