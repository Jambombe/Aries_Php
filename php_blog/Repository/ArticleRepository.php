<?php

    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Lib/Connexion.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Entity/Article.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Lib/Constants.php';


    class ArticleRepository extends Article
    {
        private $objConnect;
        
        public function __construct() {
            $connect = new Connexion();
            $this->objConnect = $connect->getDb();
        }
        
        
        public function setArticleData($artObj)
        {
            parent::setTitle($artObj->getTitle());
            parent::setContent($artObj->getContent());
            parent::setArtDate($artObj->getArtDate());
            parent::setParentBlogId($artObj->getParentBlogId());
        }
        
        
        public function insertDb()
        {
            $title = parent::getTitle();
            $content = parent::getContent();
            $creationDate = parent::getCreationDate();
            $parentBlogId = parent::getParentBlogId();
            
            $query = ("INSERT INTO Articles(title, content, artDate, parentBlogIf)"
                    . "VALUES ('$title', '$content', '$creationDate', $parentBlogId)");

            if ($this->objConnect->exec($query) === FALSE)
            {
                return INSERT_FAILED;
            } else 
            {
                return INSERT_SUCCESS;
            }
        }
        
        public function getArticlesByBlogId($blogId)
        {
            $query = "SELECT * FROM Articles WHERE parentBlogId = $blogId ORDER BY artDate DESC";
            
            $res = $this->objConnect->query($query);
            
            $articles = $res->fetchAll(PDO::FETCH_CLASS, 'Article');
            
            return $articles;            
        }
        
    }
