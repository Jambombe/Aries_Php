<?php

    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Entity/Blog.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Repository/BlogRepository.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Repository/ArticleRepository.php';

    class BlogController
    {
        public function newAction($title, $ownerId)
        {
            $newBlog = new Blog();
            $newBlog->setTitle($title);
            
            date_default_timezone_set('Europe/Paris');
            $newBlog->setCreationDate(date("d/m/Y G:i"));
            $newBlog->setOwnerId($ownerId);
            
            $blogRepo = new BlogRepository();
            $blogRepo->setBlogData($newBlog);
            
            return $blogRepo->insertDb();
        }
        
        public function listAction()
        {
            $blogRepo = new BlogRepository();
            return array(array('blogs'=>$blogRepo->getAllBlogs()), 'Blogs/allBlogs.html');
        }
        
        public function oneBlog($blogId)
        {
            $blogRepo = new BlogRepository();
            $artRepo = new ArticleRepository();
            return array(array('blog'=>$blogRepo->getBlogById($blogId), 'articles'=>$artRepo->getArticlesByBlogId($blogId)), 'Blogs/oneBlog.html');
        }
        
        public function getBlogsByUserId()
        {
            $blogRepo = new BlogRepository();
            return array(array('myblogs'=>$blogRepo->getBlogsByUserId($_SESSION['userId'][0][0])), 'Blogs/myBlogs.html');
        }
        

    }
