<?php

    class Comment
    {
        private $id;
        private $content;
        private $authorId;
        private $articleId;
        private $comentDate;
        
        
        public function getId() { return $this->id; }
        public function getContent() { return $this->content; }
        public function getAuthorId() { return $this->authorId; }
        public function getArticleId() { return $this->articleId; }
        public function getComentDate() { return $this->comentDate; }

        public function setId($id) { $this->id = $id; }
        public function setContent($content) { $this->content = $content; }
        public function setAuthorId($authorId) { $this->authorId = $authorId; }
        public function setArticleId($articleId) { $this->articleId = $articleId; }
        public function setComentDate($comentDate) { $this->comentDate = $comentDate; }


    }
