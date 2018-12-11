<?php

    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Lib/Connexion.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Entity/Blog.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Lib/Constants.php';


    class BlogRepository extends Blog
    {
        private $objConnect;
        
        public function __construct() {
            $connect = new Connexion();
            $this->objConnect = $connect->getDb();
        }
        
        
        public function setBlogData($blogObj)
        {
            parent::setTitle($blogObj->getTitle());
            parent::setCreationDate($blogObj->getCreationDate());
            parent::setOwnerId($blogObj->getOwnerId());
        }
        
        
        public function insertDb()
        {
            $title = parent::getTitle();
            $creationDate = parent::getCreationDate();
            $ownerId = parent::getOwnerId();
            
            $query = ("INSERT INTO blogs(title, creationDate, ownerId, active) VALUES ('$title', '$creationDate', '$ownerId', true)");

            if ($this->objConnect->exec($query) === FALSE)
            {
                return INSERT_FAILED;
            } else 
            {
                return INSERT_SUCCESS;
            }
        }
        
        
        public function getAllBlogs(): array
        {
            $query = "SELECT b.*, u.username FROM blogs b, users u WHERE b.ownerid = u.id ORDER BY creationDate";
            
            $res = $this->objConnect->query($query);
            
            $allBlogs = $res->fetchAll();
            
//            var_dump($allBlogs);
            
            return $allBlogs;
        }
        
        // Retourne tout les attributs du Blog
        // + le nom d'utilisateur du propriétaire
        public function getBlogById($id)
        {
            $query = "SELECT b.*, u.username FROM blogs b, users u WHERE b.id = $id AND u.id = b.ownerid";
            
            $res = $this->objConnect->query($query);
            
            $blog = $res->fetchAll();
            
            return $blog;            
        }
        
        public function getBlogsByUserId($userId)
        {
            $query = "SELECT * FROM blogs WHERE ownerid = $userId ORDER BY creationDate";
            
            $res = $this->objConnect->query($query);
            
            $myBlog = $res->fetchAll(PDO::FETCH_CLASS, 'Blog');
            
            return $myBlog;            
        }
        
    }
